<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
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
        try {
            $registration->save();
        } catch (QueryException $e) {
            $returnData = array(
                'status' => 'error',
                'message' => 'รหัสบัตรประชาชนนี้ใช้ลงทะเบียนไปแล้ว',
            );
            return response()->json($returnData, 500);
        }
        try {
            $wifi = \App\Wifi::whereNull('registration_id')->first();
            $wifi->registration_id = Input::get('citizenId');
            $wifi->save();
        } catch (\Exception $e) {
            $returnData = array(
                'status' => 'error',
                'message' => 'รหัสไวไฟที่เตรียมไว้ได้หมดลงแล้ว ขออภัยในความไม่สะดวก',
            );
            return response()->json($returnData, 500);
        }
        return response()->json($wifi);
    }
}
