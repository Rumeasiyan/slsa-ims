<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Award extends Model
{
    protected $fillable = [
        'section_id',
        'award_section',
        'group_code',
        'code',
        'award_name',
        'category',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
