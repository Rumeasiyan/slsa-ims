<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Troop extends Model
{
    protected $fillable = [
        'name',
        'group_id',
        'troop_leader',
        'troop_created_by',
        'troop_updated_by',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function leader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'troop_leader');
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'troop_users')
            ->withTimestamps();
    }
}
