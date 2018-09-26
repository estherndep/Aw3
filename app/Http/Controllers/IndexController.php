<?php
namespace App\Http\Controllers;

use App\Service;
use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    Public function index(){
        $title = 'Welcome to Awtomeiddia';
        $services = Service::orderBy('name');
        return view('pages.index',compact('title', 'services'));
      }

}