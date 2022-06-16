<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\API\BaseApiController;
use App\Http\Requests\Api\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginApiController extends BaseApiController
{
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return $this->makeErrorResponse([]);
        }
        $user = $request->user();
        $accessToken = $user->createToken('authToken')->accessToken;
        return $this->makeSuccessResponse([
            'user' => $user, 
            'access_token' => $accessToken
        ]);

    }
}
