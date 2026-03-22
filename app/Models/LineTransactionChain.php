<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LineTransactionChain extends Model
{
    protected $table = 'line_transaction_chain';

    protected $fillable = [
        'user_id',
        'level_number',
        'action_type',
        'details',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}