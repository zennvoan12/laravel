<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('contents.index');
    }

    public function hello()
    {
        // $fruits = ['Mangga', 'Jeruk', 'Apel']
        // return view('contents.hello', compact('fruits'));

        $data['fruits'] = ['mangga', 'Jeruk', 'Apel'];

        return view('contents.hello')->with($data);
    }
}
