<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        $team = [
            ['name' => 'Dima', 'position' => 'CTO'],
            ['name' => 'Katya', 'position' => 'CEO']
        ];
        return view('page.about', ['team' => $team]);
    }
}
