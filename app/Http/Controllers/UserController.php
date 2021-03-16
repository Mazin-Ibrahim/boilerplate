<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\storeRequest;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(storeRequest $request)
    {

        return $request->store();
    }
}
