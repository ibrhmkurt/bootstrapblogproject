<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Admin;

class DashboardController extends Controller
{


    public function __construct(){
        view()->share('admin',Admin::where('id',1)->get());
    }

    public function index(){
        $article=Article::all()->count();
        $hit=Article::sum('hit');  
        $category=Category::all()->count();
        $page=Page::all()->count();
        return view('back.dashboard', compact('article','hit','category','page'));
    }
}


