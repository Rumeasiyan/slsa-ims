<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, HasRoles, LogsActivity, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'two_factor_confirmed_at' => 'datetime',
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'email'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    public function troops(): BelongsToMany
    {
        return $this->belongsToMany(Troop::class, 'troop_users')
            ->withTimestamps();
    }

    public function groups(): HasMany
    {
        return $this->hasMany(Group::class, 'group_leader');
    }

    public function userMemberPositions(): BelongsToMany
    {
        return $this->belongsToMany(MemberPosition::class, 'user_member', 'user_id', 'member_positions_id')
            ->withTimestamps();
    }

    public function positionRequests(): HasMany
    {
        return $this->hasMany(PositionRequest::class);
    }

    public function membershipRenewalRequests(): HasMany
    {
        return $this->hasMany(MembershipRenewalRequest::class);
    }

    public function warrantRequests(): HasMany
    {
        return $this->hasMany(WarrantRequest::class);
    }

    public function warrants(): HasMany
    {
        return $this->hasMany(Warrant::class);
    }

    public function trainingDetails(): HasMany
    {
        return $this->hasMany(TrainingDetail::class);
    }
}
