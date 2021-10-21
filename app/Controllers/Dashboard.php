<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'tester'
        ];
        return view('dashboard', $data);
    }
}
