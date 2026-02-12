<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function dataf()
    {
        $data = [
            'title' => 'Laravel Page',
            'message' => 'Hello world!'
        ];

        return view('data', compact('data'));
    }
}
