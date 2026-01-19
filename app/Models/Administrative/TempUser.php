<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TempUser extends Model
{
    protected $fillable = [
        'name', 'email', 'mobile', 'gender_id',
        'organization', 'occupation_designation',
        'present_address', 'password', 'verification_token'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->verification_token = Str::random(40);
        });
    }
}
