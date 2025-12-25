<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    protected $fillable = [
        'type',
        'position_code',
        'position_name',
    ];

    public function memberPositions(): HasMany
    {
        return $this->hasMany(MemberPosition::class);
    }
}
