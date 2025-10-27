<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmVerification extends Model
{
    use HasFactory;

    protected $table = 'confirm_verifications';

    protected $guarded = [];
}
