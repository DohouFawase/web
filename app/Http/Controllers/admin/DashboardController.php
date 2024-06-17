<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Service;


class DashboardController extends Controller
{
    //

    public function index() 
    {
        $ServicesCount = Service::count();
        $ArticleCount = Article::count();
        return view ('admin.dashboard',[
            'ServicesCount' => $ServicesCount ,
            'ArticleCount' => $ArticleCount ,
        ]);
    }
}
