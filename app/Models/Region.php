<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'region',
    ];

    public function city()
    {
        return $this->hasMany(Sehir::class, 'region_id');
    }

    public function branch()
    {
        return $this->hasMany(Branch::class, 'region_id');
    }
}
