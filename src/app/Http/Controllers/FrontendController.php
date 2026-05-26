<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Profile;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function projects()
    {
        $projects = Project::all();

        $frontendSkills = Skill::where('kategori', 'frontend')->get();

        $backendSkills = Skill::where('kategori', 'backend')->get();

        $profile = Profile::first();

        return view('projects.index', compact(
            'projects',
            'frontendSkills',
            'backendSkills',
            'profile'
        ));
    }
}