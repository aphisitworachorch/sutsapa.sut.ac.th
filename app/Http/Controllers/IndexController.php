<?php

namespace App\Http\Controllers;

use App\Models\Slideshow;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ( 'sapa.main' )->with ( array('slideshow_data' => $this->getSlideShow ()) );
    }

    public function getSlideShow()
    {
        $slideshow = new Slideshow();
        return $slideshow->get ();
    }
}
