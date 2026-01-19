<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'priority',
        'name',
        'division_id',
        'status'
    ];
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    // public function upazilas()
    // {
    //     return $this->hasMany(Upazila::class);
    // }
}
