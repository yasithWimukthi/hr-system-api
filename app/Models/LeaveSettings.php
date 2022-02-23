<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveSettings extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'country',
        'leave_name',
        'relevant_days',
        'joined_month',];
}
