<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'price' => 0.0025,
            'change_24h' => 12.5, 
            'market_cap' => '2,500,000', 
            'holders' => '1,240', 
        ];

        return view('welcome', compact('data'));
    }
}