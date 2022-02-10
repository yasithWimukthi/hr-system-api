<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'country',
        'companyName',
        'contactPerson',
        'address',
        'city',
        'state',
        'postalCode',
        'email',
        'phoneNumber',
        'mobileNumber',
        'fax',
        'websiteUrl'
    ];
}
