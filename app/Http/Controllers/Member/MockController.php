<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MockController extends Controller
{
    public function index()
    {
        return Inertia::render('Member/Mock/index',[
            
        ]);
    }
}
