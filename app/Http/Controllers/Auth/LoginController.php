<?php

namespace App\Http\Controllers\Auth;


use auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\LoginFormRequest;
use App\Http\Resources\Auth\PrivateUserResource;

class LoginController extends Controller
{
    public function action(LoginFormRequest $request)
    {
        if (!$token = auth()->attempt($request->only('email', 'password'))) {
            return response()->json([
                'errors' => [
                    'email' => ['Could not sign you in with those details.']
                ]
            ], 422);
        }

        return (new PrivateUserResource($request->user()))
            ->additional([
                'meta' => [
                    'token' => $token
                ]
            ]);
    }
}
