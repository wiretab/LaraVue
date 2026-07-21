<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

#[Fillable(['email', 'name'])]
class Provider extends Model
{
    public function appointments(): HasMany {
        return $this->hasMany(Appointment::class);
    }

    public function availabilities(): HasMany {
        return $this->hasMany(Availability::class);
    }

    public function patients(): HasManyThrough {
        return $this->hasManyThrough(Patient::class, Appointment::class);
    }


}
