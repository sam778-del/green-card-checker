<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checker;

class GreenpassController extends Controller
{
    public function index()
    {
        return view('greenpass.index');
    }

    public function check_result(Request $request)
    {
        $code = $request->code;
        $greenpass = new Checker;
        $result = $greenpass->green_checker($code);
        return dd($result);
        //return view('greenpass.result', compact('result'));
    }
}
