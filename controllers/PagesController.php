<?php

class PagesController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        // return view('index', compact('users'));
        return view('index', ['users' => $users]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}