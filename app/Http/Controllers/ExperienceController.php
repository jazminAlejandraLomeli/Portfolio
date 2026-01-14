<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
     public function show(string $keyword)
    {
        $projects = config('data-projects.projects');

        $project = collect($projects)->firstWhere('keyword', $keyword);

        if (!$project) {
            abort(404);
        }

        return view('projects.index', [
            'currentPage' => 'Experience',
            'project' => $project,
           
        ]);
    }
}
