<?php

namespace App\Models;

use illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['employee_id', 'start_date', 'end_date', 'daily_rate'])]
class Contract extends Model {}
