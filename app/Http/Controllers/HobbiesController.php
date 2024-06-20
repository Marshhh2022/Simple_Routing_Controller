<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show()
    {
        $data = [
            'hobbies' => ['Devotion', 
                        'Taking pictures of you', 
                        'Playing Badminton']
        ];

        return view('hobbies', $data);
    }
    
}
