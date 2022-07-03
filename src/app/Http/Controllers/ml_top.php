<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ml_top extends Controller
{
    public function index() {
        $data = ['title' => 'ML TOP', 'content'=> 'TEST'];
        return view('ml_template.index', $data);
    }
}