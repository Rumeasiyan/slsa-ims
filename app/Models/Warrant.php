<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Warrant extends Model
{
    protected $fillable = [
        'warrant_no',
        'user_id',
        'member_position_id',
        'warrant_request_id',
        'started_date',
        'renewed_date',
        'status',
        'created_by',
        'updated_by',
    ];

    protected function casts(): array
    {
        return [
            'started_date' => 'date',
            'renewed_date' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function memberPosition(): BelongsTo
    {
        return $this->belongsTo(MemberPosition::class, 'member_position_id');
    }

    public function warrantRequest(): BelongsTo
    {
        return $this->belongsTo(WarrantRequest::class, 'warrant_request_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
