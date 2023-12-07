<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function images(){
        return $this->hasMany(Property_Image::class, 'property_id','id');
    }

    public function types(){
        return $this->hasMany(Type::class);
    }

//    public function  users(){
//        return $this->hasMany(User:: class);
//    }
}
