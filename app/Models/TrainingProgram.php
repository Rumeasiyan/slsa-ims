<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TrainingProgram extends Model
{
    protected $fillable = [
        'name',
        'code',
    ];

    public function trainingDetails(): HasMany
    {
        return $this->hasMany(TrainingDetail::class);
    }
}
