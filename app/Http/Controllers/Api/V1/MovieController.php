<?php

namespace App\Http\Controllers\Api\V1;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Resources\V1\MovieResource;
use App\Http\Resources\V1\MovieCollection;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\JsonResponseTrait;
class MovieController extends Controller
{
    use JsonResponseTrait;
    public function show($id)
    {
        $movie = Movie::with('images')->find($id);

        if (!$movie) {
            return $this->jsonResponse('Movie not found', $this->httpNotFound());
        }

        return new MovieResource($movie);
    }

    public function search(Request $request)
    {
        $validatedData = $this->validateSearchParameters($request);

        $movies = Movie::query();

        if (isset($validatedData['director'])) {
            $movies->where('director', 'LIKE', "%{$validatedData['director']}%");
        }

        if (isset($validatedData['genre'])) {
            $movies->where('genre', 'LIKE', "%{$validatedData['genre']}%");
        }

        if (isset($validatedData['actors'])) {
            $movies->where('actors', 'LIKE', "%{$validatedData['actors']}%");
        }

        if (isset($validatedData['min_date'])) {
            $movies->whereDate('created_at', '>=', $validatedData['min_date']);
        }

        if (isset($validatedData['max_date'])) {
            $movies->whereDate('created_at', '<=', $validatedData['max_date']);
        }

        $movies = $movies->with('images')->paginate($request->query('per_page', 15));

        return new MovieCollection($movies);
    }

    protected function validateSearchParameters(Request $request)
    {
        return $request->validate([
            'director' => 'nullable|string',
            'genre' => 'nullable|string',
            'actors' => 'nullable|string',
            'min_date' => 'nullable|date',
            'max_date' => 'nullable|date',
        ]);
    }


    public function store(StoreMovieRequest $request)
    {
        $movie = Movie::create($request->validated());

        return new MovieResource($movie, $this->httpCreated());
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return $this->jsonResponse('Movie not found', $this->httpNotFound());
        }

        $movie->delete();

        return $this->jsonResponse('Movie deleted succesfully', $this->httpNocontent());
    }

    public function update(StoreMovieRequest $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return $this->jsonResponse('Movie not found', $this->httpNotFound());
        }

        $movie->update($request->validated());

        return new MovieResource($movie);
    }

    public function replace(StoreMovieRequest $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return $this->jsonResponse('Movie not found', $this->httpNotFound());
        }

        $movie->update($request->validated());

        return new MovieResource($movie);
    }
}
