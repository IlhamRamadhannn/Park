<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected $table = 'parking'; // Nama tabel di database
    protected $fillable = ['uniqueCode', 'licenseNumber', 'enter', 'exit', 'cost'];
}

