<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Car;


class Command extends Model
{
    protected $guarded=[];

    public function user(){

        return $this->belongsTo(user::class);
    }

    public function car(){

        return $this->hasOne(Car::class);
    }
}
