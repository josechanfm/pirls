<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $appends=['question_count'];

    public function getQuestionCountAttribute(){
        return $this->hasMany(Lead::class)->where('type','QUESTION')->count();
    }
    public function domain(){
        return $this->belongsTo(Domain::class);
    }
    public function leads(){
        return $this->hasMany(Lead::class)->with('leadable');
    }
    public function guides(){
        return $this->hasMany(Guide::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
