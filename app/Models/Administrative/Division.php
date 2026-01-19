<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'priority',
        'name',
        'status'
    ];
}
