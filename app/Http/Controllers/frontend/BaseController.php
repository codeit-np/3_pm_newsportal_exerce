<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct() {
        $categories = Category::all();

        //Lastest News
        $latestNews = Article::orderBy('created_at','desc')->get();

        //Politics News
        $politics = Category::where('slug','politics')->first();
        $politicsNews = $politics->article;

        View::share([
            'categories' => $categories,
            'latestNews' => $latestNews,
            'politics' => $politicsNews,
        ]);
    }
}
