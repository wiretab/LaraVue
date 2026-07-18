<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['starts_at', 'ends_at', 'status', 'notes'])]
class Appointment extends Model
{


    public function provider(): BelongsTo {
        return $this->belongsTo(Provider::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function patient(): BelongsTo {
        return $this->BelongsTo(User::class);
    }

    public function appointmentType(): BelongsTo {
        return $this->BelongsTo(AppointmentType::class);
    }

}
