<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpType extends Model
{
    use HasFactory;
    protected $fillable = [
    'EmpTypeId',
    'EmpTypeName',
    ];
}
