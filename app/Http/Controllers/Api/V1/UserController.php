<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\V1\UserResource;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\JsonResponseTrait;

class UserController extends Controller
{
    use JsonResponseTrait;

    public function index()
    {
        return UserResource::collection(User::paginate());
    }

    public function show($id)
    {
        $user = $this->findUserById($id);

        if (!$user) {
            return $this->jsonResponse('User not found', $this->httpNotFound());
        }

        return new UserResource($user);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'name' => 'required|string',
        ]);

        $user = User::create([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'name' => $validatedData['name'],
        ]);

        return new UserResource($user);
    }

    public function update(Request $request, $id)
    {
        $user = $this->findUserById($id);

        if (!$user) {
            return $this->jsonResponse('User not found', $this->httpNotFound());
        }

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|min:8|confirmed',
        ]);

        if (isset($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $user->update($validatedData);

        return new UserResource($user);
    }

    public function destroy($id)
    {
        $user = $this->findUserById($id);

        if (!$user) {
            return $this->jsonResponse('User not found', $this->httpNotFound());
        }

        $user->delete();

        return $this->jsonResponse('User deleted successfully', $this->httpNoContent());
    }

    private function findUserById($id)
    {
        return User::find($id);
    }
}
