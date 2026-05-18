<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $frontendSkills=Skill::where('kategori', 'frontend')->get();
        $backendSkills=Skill::where('kategori', 'backend')->get();

        return view('admin.projects.index', compact('frontendSkills', 'backendSkills'));
    }
}
