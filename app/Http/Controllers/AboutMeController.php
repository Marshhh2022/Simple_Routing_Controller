<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        $data = [
            'name' => 'Marjorie Soposop',
            'description' => 'Cutie Patotiee'
        ];

        return view('/about_me', $data);
    }
}
