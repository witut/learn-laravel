<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, officia.',
                'status'=>1
            ],
            [
                'title' => 'Title Two',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, officia.',
                'status'=>1
            ],
            [
                'title' => 'Title Three',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, officia.',
                'status'=>1
            ],
            [
                'title' => 'Title Four',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, officia.',
                'status'=>1
            ],

        ];
        return view('home', compact('blogs'));
    }
}
