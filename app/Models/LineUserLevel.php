<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LineUserLevel extends Model
{
    protected $table = 'line_user_levels';

    protected $fillable = [
        'user_id',
        'level_number',
        'status',
        'users_count',
    ];

    protected $casts = [
        'users_count' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}