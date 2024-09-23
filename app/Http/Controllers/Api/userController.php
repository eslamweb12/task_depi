<?php

namespace App\Http\Controllers\Api;

use App\action\message;
use App\Http\Controllers\Controller;
use App\Http\Requests\userRequest;
use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login(userRequest $request)
    {
        $credentials = ['phone' => request('phone'), 'password' => request('password')];

        if (Auth()->attempt($credentials)) {
            $user = auth()->user();
            // Correct the typo in plainTextToken
            $user['token'] = $user->createToken('phone')->plainTextToken;

            return message::success(userResource::make($user), 'You have logged in successfully');
        }

        return message::error('Phone or password is not correct', 400);
    }

}
