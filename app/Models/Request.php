<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['number', 'service_id'])]
class Request extends Model
{
    use HasFactory;

    /**
     * A request belongs to a service.
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
