<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['title'])]
class Category extends Model
{
    use HasFactory;

    /**
     * A category has many services.
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
