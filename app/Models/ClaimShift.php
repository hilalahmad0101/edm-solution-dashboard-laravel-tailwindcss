<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimShift extends Model
{

    use HasFactory;

    protected $table = 'claim_shifts';

    protected $guarded = [];

    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
