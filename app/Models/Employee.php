<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'dob', 'doj', 'phone', 'email'];
    // $fillable is a property in the model that defines which fields can be mass-assigned when creating or updating records.
}
