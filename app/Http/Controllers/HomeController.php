<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Welcome', [
            'laravelVersion' => '10.x',
            'phpVersion' => '8.2.4',
        ]);
    }
}
