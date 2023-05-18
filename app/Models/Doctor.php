<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'profession', 'about'];


    public function appointment(): HasOne
    {
        return $this->hasOne(Appointment::class, 'doctor_id');
    }
}
