<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_Image extends Model
{
    use HasFactory;
    protected $fillable = ['image_name'];


    public function property(){
        return $this->belongsTo(Property::class,);

    }
    public function setFilenamesAttribute($value)
    {
        $this->attributes['image_name'] = json_encode($value);
    }
}
