<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'type',
        'user_id',
        'amount',
        'senderId',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
