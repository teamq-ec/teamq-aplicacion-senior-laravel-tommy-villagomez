<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use GuzzleHttp\Client;
use Faker\Factory as Faker;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $faker = Faker::create();
        $apiKey = env('MOVIES_API_KEY');
        $url = env('MOVIES_URL');
        $movies = [];

        for ($page = 1; $page <= 5; $page++) { // Fetching multiple pages to get 100 movies
            $response = $client->get($url, [
                'query' => [
                    'api_key' => $apiKey,
                    'language' => 'en-US',
                    'page' => $page,
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            $movies = array_merge($movies, $data['results']);
        }

        foreach ($movies as $movieData) {
            Movie::create([
                'title' => $movieData['title'],
                'description' => $movieData['overview'],
                'year' => substr($movieData['release_date'], 0, 4),
                'director' => $faker->name,
                'genre' => $faker->word,
                'actors' => $faker->name . ', ' . $faker->name,
            ]);
        }
    }
}
