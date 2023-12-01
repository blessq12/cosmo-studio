<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'email',
        'vkLink',
        'acc2gis',
        'accYandex',
    ];
    public function studios(){
        return $this->hasMany(Studio::class);
    }
}
