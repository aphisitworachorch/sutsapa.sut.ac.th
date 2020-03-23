<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;

class DiscussionController extends Controller
{
    public function index(){
        $dc = Discussion::all();
        return view('discussion.index')->with('discuss_view',$dc);
    }

    public function viewDiscussion(Request $request){
        $dc = Discussion::where('id',$request->id)->get();
        return view('discussion.detail')->with('discussion_detail',$dc);
    }

    public function createDiscussion(Request $request){
        $status = 0;
        return response((function() use (&$request,&$status){
            $dis = Discussion::create([
                "discussion_title"=>$request->discussion_title,
                "discussion_content"=>$request->discussion_content
            ]);

            if(!empty($dis->id)){
                $status = 200;
                return array("status"=>"create_completed");
            }else{
                $status = 500;
                return array("status"=>"create_uncomplete");
            }
        })(), intval($status));
    }

    public function editDiscussion(Request $request){
        $status = 0;
        return response((function() use (&$request,&$status){
            $dis = Discussion::find($request->id);
            $dis->update([
                "discussion_title" => $request->discussion_title,
                "discussion_content" =>$request->discussion_content
            ]);

            if(!empty($dis->id)){
                $status = 200;
                return array("status"=>"update_completed");
            }else{
                $status = 500;
                return array("status"=>"update_uncomplete");
            }
        })(), intval($status));
    }
}
