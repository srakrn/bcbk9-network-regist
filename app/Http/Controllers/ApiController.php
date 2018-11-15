<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function register()
    {
        return response()->json(['username' => 'testtest', 'password' => 'testtesttest']);
    }
}
