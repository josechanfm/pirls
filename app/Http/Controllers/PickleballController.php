<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\PickleballRule;

class PickleballController extends Controller
{
    public function scoreBoard()
    {
        return Inertia::render('Pickleball/scoreBoard',[
            
        ]);
    }
    public function mcq(){
        return Inertia::render('Pickleball/mcq',[
            'questions'=>PickleballRule::generatePaper()
        ]);
    }

}
