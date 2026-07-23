<?php

namespace App\Models;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'duration_minutes', 'buffer_before', 'buffer_after', 'price', 'is_active'])]
class AppointmentType extends Model
{
    use HasFactory;
    
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
