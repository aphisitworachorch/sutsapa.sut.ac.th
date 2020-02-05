<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view ( 'sapa.news' )->with ( 'news_controller' , News::query ()->get () );
    }

    public function articleview($id)
    {
        $news = News::where ( 'id' , $id )->get ();
        return view ( 'news.fullnews' )->with ( 'newsview' , $news );
    }

}
