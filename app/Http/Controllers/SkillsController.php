<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillsController extends Controller
{
    public function search($skill)
    {
        $skills_array = explode(" ", $skill);

        $skills = Skill::query();

        $already_added = auth()->user()->skills->pluck('id');

        foreach ($skills_array as $skill)
        {
            $skills->where('skill', 'LIKE', '%' . $skill . '%')->whereNotIn('id', $already_added);
        }

        return $skills->distinct()->get();
    }

    public function add()
    {
        // echo request()->skill_id;
        // echo request()->rating;
        request()->validate([
            'rating' => 'required'
        ]);

        auth()->user()->skills()->attach( request()->skill_id ,['rating' => request()->rating]);

        return auth()->user()->skills;
    }

    public function detach()
    {
        auth()->user()->skills()->detach( request()->skill_id);

        return redirect()->back();
    }
}
