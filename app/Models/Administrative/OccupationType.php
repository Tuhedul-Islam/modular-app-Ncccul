<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccupationType extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'priority',
        'name',
        'status'
    ];
}
