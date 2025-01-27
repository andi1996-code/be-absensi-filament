<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Company extends Model
{
    //
    use SoftDeletingScope, HasFactory;
    protected $fillable = [
        'name',
        'email',
        'latitude',
        'radius_km',
        'time_in',
        'time_out',
    ];
}
