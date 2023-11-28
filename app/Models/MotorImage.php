<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotorImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url',
        'motorcycle_id'
    ];

    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class, 'motorcycle_id', 'id');
    }
}
