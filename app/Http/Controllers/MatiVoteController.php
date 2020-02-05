<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatiVoteController extends Controller
{

    public function __construct()
    {
        $this->middleware ( 'api' );
    }

    public function vote(Request $request , $vote_id)
    {
        if (Auth::check ()) {
            if ($request->vote_type === "yes") {
                $vote = Vote::where ( 'id' , $vote_id )
                    ->increment ( 'yes' , 1 );
                return response ()->json ( ['status' => 'complete_yes'] );
            } else if ($request->vote_type === "no") {
                $vote = Vote::where ( 'id' , $vote_id )
                    ->increment ( 'no' , 1 );
                return response ()->json ( ['status' => 'complete_no'] );
            } else if ($request->vote_type === "no_comment") {
                $vote = Vote::where ( 'id' , $vote_id )
                    ->increment ( 'no_comment' , 1 );
                return response ()->json ( ['status' => 'complete_no-comment'] );
            }
        } else {
            return response ()->json ( ['status' => 'unauthentication'] );
        }
    }
}
