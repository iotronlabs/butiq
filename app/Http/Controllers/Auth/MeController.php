<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Auth\PrivateUserResource;

class MeController extends Controller
{   

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth:api']);
        redirect('/');
    }
    public function action(Request $request)
    {
        return new PrivateUserResource($request->user());

    }
}
