<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['first_name', 'last_name', 'birth_date', 'tax_code', 'sector_id'])]
#[Hidden(['tax_code'])]

class Employee extends Model
{
    use HasFactory;

    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }
}
