<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'todo_list' => ['Clean House', 'Make a Coffee', 'Run Errands'],
            'title' => 'Welcome to CI 4!'
        ];  
        return view('welcome_message', $data);
    }

    public function view($page = 'home')
    {
        echo 'hello';
    }
}
