<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieImage;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\V1\MovieImageResource;
use App\Http\Resources\V1\MovieImageCollection;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\JsonResponseTrait;

class MovieImageController extends Controller
{
    use JsonResponseTrait;

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function store(Request $request, $id)
    {
        $movie = $this->findMovieById($id);

        if (!$movie) {
            return $this->jsonResponse('Movie not found', $this->httpNotFound());
        }

        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg|max:2048', 
        ]);

        $path = $request->file('image')->store('images', 'public');

        $image = new MovieImage();
        $image->movie_id = $movie->id;
        $image->image_path = $path;
        $image->save();

        return new MovieImageResource($image);
    }

    public function index($id)
    {
        $movie = $this->findMovieById($id);

        if (!$movie) {
            return $this->jsonResponse('Movie not found', $this->httpNotFound());
        }

        $images = $movie->images;

        return new MovieImageCollection($images);
    }

    public function update(Request $request, $id, $imageId)
    {
        $movie = $this->findMovieById($id);

        if (!$movie) {
            return $this->jsonResponse('Movie not found', $this->httpNotFound());
        }

        $image = MovieImage::where('movie_id', $id)->find($imageId);

        if (!$image) {
            return $this->jsonResponse('Image not found', $this->httpNotFound());
        }

        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg|max:2048',
        ]);

        Storage::disk('public')->delete($image->image_path);

        $path = $request->file('image')->store('images', 'public');

        $image->image_path = $path;
        $image->save();

        return new MovieImageResource($image);
    }

    private function findMovieById($id)
    {
        return Movie::find($id);
    }
}
