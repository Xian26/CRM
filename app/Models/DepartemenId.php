<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartemenId extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama', 'status'];
}
