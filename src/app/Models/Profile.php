<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'hero_title',
        'hero_description',
        'about_story',
        'profile_photo',
        'about_image', // Ditambahkan di sini
        'project_description',
        'name',
        'phone',
        'github',
        'email',
        'experience_years',
        'happy_customers',
        'projects_finished',
        'digital_awards',
    ];
}