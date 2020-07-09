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
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        if (Auth::check ()) {
            if($request->ajax() && $request->method() == "POST"){
                $news = News::find($id);
                $news->news_title = $request->news_title;
                $news->news_content = $request->news_content;
                $news->save();
                return response()->json(array("status"=>"success"));
            }else{
                $news = News::where ( 'id' , $id )
                    ->get ();
                return view ( 'news.fullnews_edit' )->with ( array("newsview" => $news) );
            }
        } else {
            $news = News::where ( 'id' , $id )
                ->get ();
            return view ( 'news.fullnews' )->with ( array("newsview" => $news) );
        }
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
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function destroy(Request $request,$id)
    {
        if($request->ajax()){
            if (Auth::check ()) {
                $news = News::find($id);
                $news->delete();
                return response()->json(array("status"=>"success"));
            }else{

            }
        }
    }
}
