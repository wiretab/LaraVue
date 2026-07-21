<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

#[Fillable(['name', 'gender', 'dob'])]
class Patient extends Model
{

    // protected $casts = [
    //     'dob' => 'date:Y-m-d'
    // ];

    public function providers(): HasManyThrough {
        return $this->hasManyThrough(Provider::class, Appointment::class);
    }

    public function appointments(): HasMany {
        return $this->hasMany(Appointment::class);
    }
}
