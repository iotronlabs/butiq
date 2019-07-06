<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\Auth\RegisterFormRequest;
use App\Http\Resources\Auth\PrivateUserResource;

class RegisterController extends Controller
{
     use RegistersUsers;

       public function action(RegisterFormRequest $request)
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

    
    
     
    
    //     public function action(Request $request)
    // {
    //     $validator=$this->validator($request->all());
        
    //    if(!$validator->fails())
    //    {
    //        $user= $this->create($request->all());
           
           
    //     //    $token= Auth::guard('studen')->attempt($request->only('t_email','password'));
           
           
           
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
