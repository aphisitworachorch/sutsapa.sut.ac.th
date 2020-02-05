<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NewsCreateResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return News::query ()
            ->orderBy ( 'updated_time' )
            ->get ( ['news_content'] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check ()) {
            $data = Validator::make ( $request->all () , [
                'news_title' => 'required' ,
                'news_content' => 'required'
            ] );
            if ($data->fails ()) {
                return response ()->json ( ['status' => 'input_failed'] );
            }
            $input = $request->all ();
            $news = News::create ( $input );
            return response ()->json ( ['status' => 'success'] );
        } else {
            return response ()->json ( ['status' => 'unauthenticated'] );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check ()) {
            $news = News::where ( 'id' , $id )
                ->get ();
            return view ( 'news.fullnews_edit' )->with ( array("newsview" => $news) );
        } else {
            $news = News::where ( 'id' , $id )
                ->get ();
            return view ( 'news.fullnews' )->with ( array("newsview" => $news) );
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
