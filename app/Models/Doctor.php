<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'fullname','phone', 'age', 'gender', 'location','speciality',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
