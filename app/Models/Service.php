<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;
use Illuminate\Http\Request;


class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image'];

    public function appointment(): HasOne
    {
        return $this->hasOne(Appointment::class, 'service_id');
    }
}
