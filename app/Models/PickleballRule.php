<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class PickleballRule extends Model
{
    use HasFactory;
    protected $fillables=['level','category','subcategory','minor','questoin','options'];
    protected $casts=['options'=>'array'];

    static function generatePaper($size=1){
        $groups=PickleballRule::select('level','category','subcategory','minor',DB::raw('count(*) as count'))->groupBy('level','category','subcategory','minor')->get();
        //dd($groups);
        $questions=[];
        foreach($groups as $group){
            $questions[]=PickleballRule::where('level',$group->level)->where('category',$group->category)->where('subcategory',$group->subcategory)->where('minor',$group->minor)->orderByRaw('RAND()')->take(1)->get()->toArray();
        }
        $questions=array_merge(...$questions);
        foreach($questions as $i=>$question){
            shuffle($questions[$i]['options']);
        }
        return $questions;

    }
}
