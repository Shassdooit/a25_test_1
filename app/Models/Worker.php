<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'hourly_rate',
    ];

    protected $hidden = [
        'password',
    ];

    public function workTransactions(): HasMany
    {
        return $this->hasMany(WorkTransaction::class);
    }
}
