<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show()
    {
        $data = [
            'skills' => ['Photography', 
                        'Singer', 
                        'Good Observer']
        ];

        return view('skills', $data);
    }
}
