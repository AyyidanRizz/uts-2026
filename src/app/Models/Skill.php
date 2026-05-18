<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    Use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
    ];
}
