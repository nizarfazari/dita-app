<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintanance_require_task_reference',
        'MFG_task_card_reference',
        'description',
        'threshold',
        'interval',
        'forecast',
        'last_done',
        'next_due',
    ];

    public function times() : BelongsTo {
        return $this->belongsTo(Time::class);
    }
}
