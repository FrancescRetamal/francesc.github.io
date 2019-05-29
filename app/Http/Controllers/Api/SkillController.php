<?php

namespace App\Http\Controllers\Api;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;

class SkillController extends Controller
{
    public function skills(){
        $skills = Skill::all();
        $data['skills'] = $skills;
        return new SkillResource($data);
    }
}
