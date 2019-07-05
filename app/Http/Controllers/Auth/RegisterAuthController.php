<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
// use App\Http\Requests\Auth\RegisterRequest;
// use App\Http\Resources\PrivateUserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\PrivateUserResource;

class RegisterAuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->only('email', 'name', 'password'));

        return new PrivateUserResource($user);
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255','unique:users'],
    //         'password' => ['required', 'string', 'min:8'],
            
    //     ]);
    // }

    // public function register(Request $request)
    // {
    //     $validator=$this->validator($request->all());
        
    //    if(!$validator->fails())
    //    {
    //        $user= $this->create($request->all());
           
           
    //     //    $token= Auth::guard('user_teachers')->attempt($request->only('t_email','password'));
           
           
           
    //        return response()->json
    //        ([
    //            'success' =>  true,
    //            'data' => $user,
    //         //    'token' => $token
    //        ],200);
    //    }
    //    return response()->json([
           
    //        'success' =>false,
    //        'errors' => $validator->errors()
           
    //    ]);
    // }

    // protected function create(array $data)
    // {   

           
    //     return User::create([
    //         'name' => $data['name'],
            
    //         'password' => Hash::make($data['password']),
    //         'email' => $data['email'],
           
         
    //     ]);
    // }

}
