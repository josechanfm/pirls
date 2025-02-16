<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Guide extends Model
{
    use HasFactory;

    public function leads():MorphMany{
        return $this->morphMany(Lead::class,'leadable');
    }
}
