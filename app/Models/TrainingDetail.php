<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrainingDetail extends Model
{
    protected $fillable = [
        'user_id',
        'phase_id',
        'training_program_id',
        'completion_date',
        'venue_school',
        'certificate_number',
        'certificate_issued_date',
        'issued_by',
    ];

    protected function casts(): array
    {
        return [
            'completion_date' => 'date',
            'certificate_issued_date' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function phase(): BelongsTo
    {
        return $this->belongsTo(Phase::class);
    }

    public function trainingProgram(): BelongsTo
    {
        return $this->belongsTo(TrainingProgram::class);
    }

    public function issuedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'issued_by');
    }
}
