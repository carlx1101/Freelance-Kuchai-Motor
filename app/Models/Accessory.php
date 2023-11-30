<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description', 'pricing', 'availability', 'accessory_cover_filename', 'accessory_cover_url', 'subcategory_id', 'salesman_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'salesman_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id', 'id');
    }

    public function accessoryImages()
    {
        return $this->hasMany(AccessoryImage::class, 'accessory_id', 'id');
    }
}
