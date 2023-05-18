<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'fullname',
        'email',
        'service_id',
        'doctor_id',
        'status',
        'phone',
        'message',
        'appointment_date',
        'appointment_time'
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function note(): HasMany
    {
        return $this->hasMany(Note::class, 'appointment_id');
    }
}
