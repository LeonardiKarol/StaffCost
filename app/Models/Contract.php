<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['employee_id', 'start_date', 'end_date', 'daily_rate'])]
class Contract extends Model {
        use HasFactory;
        public function employee(): BelongsTo
        {
            return $this->belongsTo(Employee::class);
        }
}
