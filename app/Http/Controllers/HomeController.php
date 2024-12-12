<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('login'); // Pastikan file view 'home.blade.php' ada
    }
    public function index()
    {
        return view('index'); // Pastikan file view 'home.blade.php' ada
    }
    public function about()
    {
        return view('about'); // Pastikan file view 'home.blade.php' ada
    }
    }

