<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsCreateController extends Controller
{
    public function index()
    {
        if (Auth::check ()) {
            return view ( 'admin.newscreate' )->with ( array('news_controller' => News::query ()->get ()) );
        } else {
            return redirect ( '/' );
        }
    }
}
