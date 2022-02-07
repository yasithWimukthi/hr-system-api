<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

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
