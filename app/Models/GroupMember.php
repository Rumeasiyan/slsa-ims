<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupMember extends Model
{
    protected $fillable = [
        'group_id',
        'member_id',
        'member_positions_id',
        'member_start_date',
        'member_end_date',
        'member_created_by',
        'member_renewed_by',
        'member_renewed_at',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function memberPosition(): BelongsTo
    {
        return $this->belongsTo(MemberPosition::class, 'member_positions_id');
    }
}
