<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'priority',
        'name',
        'start_date',
        'end_date',
        'is_current',
        'status',
    ];


}
