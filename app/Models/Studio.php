<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;
    protected $fillable = [
        'uri',
        'company_id',
        'phone',
        'address',
        'navYandex'
    ];
    public function workHours(){
        return $this->hasMany(WorkHour::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'image');
    }
}
