<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Domain;
use App\Models\Topic;
use App\Models\Guide;
use App\Models\Question;


class PirlsController extends Controller
{
    public function index()
    {
        $topic=Topic::with('leads')->find(1);
        $leads=Topic::find(1)->leads;
        $domain=Domain::where('area','LOCAL_CULTURE')->with('topics')->first();
        // dd($domain, $topic->question_count, $leads);
        return Inertia::render('Mock/Pirls/index',[
            'domain'=>$domain      
        ]);
    }
}
