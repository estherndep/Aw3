<?php
namespace App\Http\Controllers;

use App\Category;
use App\Service;
use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    Public function index(){
        $title = 'Welcome to Awtomeiddia';
        $services = Service::all();
        $categories = Category::all();
        return view('pages.index',compact('title', 'services', 'categories'));
      }

}