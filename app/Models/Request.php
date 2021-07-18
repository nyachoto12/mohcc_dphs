<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'fullname', 'phone','speciality','location', 'request',
    ];

    protected $guaded = [];

    public function user(){
        return $this->belongsTo(User::class);
       }
}
