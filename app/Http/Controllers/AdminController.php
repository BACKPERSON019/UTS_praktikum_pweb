<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.contact');
    }

    // public function app()
    // {
    //     return view('admin.layouts.app');
    // }
}

