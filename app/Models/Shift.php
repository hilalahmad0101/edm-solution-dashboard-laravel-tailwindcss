<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $table = 'shifts';

    protected $guarded = [];

    public function claimShift()
    {
        return $this->hasOne(ClaimShift::class, 'shift_id');
    }


    public function confirmVerification()
    {
        return $this->hasOne(ConfirmVerification::class, 'shift_id');
    }
}
