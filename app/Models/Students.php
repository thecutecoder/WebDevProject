<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{

    use HasFactory;
    protected $table ='students';
    protected $fillable = [
        'password',
        'full_name',
        'home_address',
        'email',
        'years',
        'student_image'
    ];

// turn off both
public $timestamps = false;

// turn off only updated_at
const UPDATED_AT = false;
}
