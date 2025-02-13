<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function degrees(){
        return $this->hasMany(Degree::class);
    }
    public function programs(){
        return $this->hasManyThrough(Program::class, Degree::class);
    }
}
