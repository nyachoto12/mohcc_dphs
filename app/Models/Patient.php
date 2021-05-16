<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'fullname', 'age', 'gender', 'location','occupation',
    ];
    public function user(){
     return $this->belongsTo(User::class);
    }
}
