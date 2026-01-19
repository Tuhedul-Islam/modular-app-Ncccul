<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $fillable = [
        'priority',
        'name',
        'district_id',
        'status',
    ];

    // Relationship with District
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    // Relationship with District
    // public function division()
    // {
    //     return $this->belongsTo(Division::class);
    // }
}
