<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leave extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'department',
        'designation',
        'name',
        'leaveApplyDate',
        'leaveDatesFrom',
        'leaveDatesTo',
        'numOfDays',
        'reason'];
}
