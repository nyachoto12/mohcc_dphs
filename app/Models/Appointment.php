<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'fullname', 'patient', 'appointment','date','address',
    ];

    protected $guaded = [];

    public function user(){
        return $this->belongsTo(User::class);
       }
}
