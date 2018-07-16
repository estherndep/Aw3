<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    Public function index(){
      $title = 'Welcome to Awtomeiddia'  ;
      return view('pages.index')->with('title', $title);
    }

    
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }


    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function contact(){
        $data = array(
            'title' => 'Contact us',
        );
        return view('pages.contact')->with($data);
    }
    
}

