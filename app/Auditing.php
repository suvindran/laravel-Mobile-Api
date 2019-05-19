<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Auditing extends Model
{
    protected $fillable = [
        'aadhar_card', 'pan_card', 'insurence_policy', 'gst_no', 'others', 'commands',
    ];
}
