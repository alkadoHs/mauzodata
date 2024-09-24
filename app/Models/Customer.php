<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['branch_id', 'name', 'contact'];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class);
    }
}
