<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    protected $fillable = [
        'name',
        'age',
    ];

    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }

    public function awards(): HasMany
    {
        return $this->hasMany(Award::class);
    }
}
