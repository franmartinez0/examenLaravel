<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyecto extends Model
{
    use HasFactory;

    public function creador(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function tareas(): HasMany
    {
        return $this->hasMany(Task::class);
    }
    public function usuarios(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
