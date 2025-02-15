<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PirlsController extends Controller
{
    public function index()
    {
        return Inertia::render('Mock/Pirls/index',[
            
        ]);
    }
}
