<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EmployeeController;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'eid',
    'dob',
    'gender',
    'nic',
    'address',
    'number',
    'email',
    'doj',
    'department',
    'role',
    'type',
    'branch',
    'Experience', // Note: 'Experience' with capital E — keep consistent with your input field name
];

}
