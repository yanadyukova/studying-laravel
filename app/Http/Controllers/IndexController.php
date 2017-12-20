<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $message = 'Hello world!';

        return view('page')->with('message', $message);
    }
}
