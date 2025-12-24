<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MembershipRenewalRequest extends Model
{
    protected $fillable = [
        'user_id',
        'member_positions_id',
        'current_end_date',
        'requested_start_date',
        'requested_end_date',
        'status',
        'requested_by',
        'approved_by',
        'rejected_by',
        'approved_at',
        'rejected_at',
        'rejection_reason',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'current_end_date' => 'date',
            'requested_start_date' => 'date',
            'requested_end_date' => 'date',
            'approved_at' => 'datetime',
            'rejected_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function memberPosition(): BelongsTo
    {
        return $this->belongsTo(MemberPosition::class, 'member_positions_id');
    }

    public function requestedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requested_by');
    }

    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function rejectedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'rejected_by');
    }
}
