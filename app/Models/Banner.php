<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'header',
        'subheader'
    ];
    public function image(){
        return $this->morphOne(Image::class, 'image');
    }
}
