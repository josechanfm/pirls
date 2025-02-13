<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MockController extends Controller
{
    public function index()
    {
        return Inertia::render('Mock/index',[
            
        ]);
    }
}
