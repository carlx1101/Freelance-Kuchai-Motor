<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'model',
        'manufacture_year',
        'capacity',
        'colour',
        'brand',
        'description',
        'engine_type',
        'displacement',
        'max_power',
        'max_torque',
        'transmission',
        'fuel_system',
        'ignition_system',
        'frame_type',
        'front_suspension',
        'rear_suspension',
        'fuel_capacity',
        'battery',
        'pricing',
        'availability',
        'salesman_id',
        'mileage',
        'vehicle_registration_date',
        'road_tax_expiry_date',
        'motor_cover_filename',
        'motor_cover_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'salesman_id');
    }

    public function motorcycleImages()
    {
        return $this->hasMany(MotorImage::class, 'motorcycle_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'motorcycle_id', 'id');
    }
}
