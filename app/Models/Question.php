<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Question extends Model
{
    use HasFactory;
    protected $casts=['options'=>'json'];

    public function leads():MorphMany{
        return $this->morphMany(Lead::class,'leadable');
    }
}
