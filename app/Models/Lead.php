<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Lead extends Model
{
    use HasFactory;

    // public function topic(){
    //     return $this->belongsTo(Topic::class);
    // }

    public function leadable():MorphTo{
        return $this->morphTo()->orderBy('sequence');
    }

}
