<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function getInfo()
    {
        return response()->json([
            'message' => 'Hello, this is your info Halalaljndnaqpoifdnfwfnnvfnwvpi64654!'
        ]);
    }
}