<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'session',
        'user_id',
        'branch_id',
        'car_id',
        'report',
        'status',
        'status_reason',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
