<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LineChain extends Model
{
    protected $table = 'line_chains';

    protected $fillable = [
        'level_number',
        'user_id',
        'position',
        'is_technical_clone',
        'is_working_clone',
        'status',
        'accumulated_users',
    ];

    protected $casts = [
        'is_technical_clone' => 'boolean',
        'is_working_clone' => 'boolean',
        'accumulated_users' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}