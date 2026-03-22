<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineConfig extends Model {
    protected $table = 'line_configs';
    protected $fillable = ['level_number', 'entry_cost', 'is_active'];
    protected $casts = ['entry_cost' => 'decimal:2', 'is_active' => 'boolean'];
}