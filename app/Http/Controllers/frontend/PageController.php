<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class PageController extends BaseController
{
    //home page
    public function home()
    {
        return view('frontend.home');
    }

    //category page
    public function category()
    {
        # code...
    }

    //article page
    public function article()
    {
        # code...
    }
}
