<?php

namespace App\Models;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Availability extends Model
{
    public function provider(): BelongsTo {
        return $this->belongsTo(Provider::class);
    } 
}
