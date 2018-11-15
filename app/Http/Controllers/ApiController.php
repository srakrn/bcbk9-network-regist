<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        $data = Input::all();
        $registration = new \App\Registration;
        $registration->id = Input::get('citizenId');
        $registration->base64_png = Input::get('base64Png');
        $registration->save();
        $wifi = \App\Wifi::whereNull('registration_id')->first();
        $wifi->registration_id = Input::get('citizenId');
        $wifi->save();
        return response()->json($wifi);
    }
}
