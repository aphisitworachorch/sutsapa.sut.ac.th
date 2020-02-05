<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Support\Facades\Auth;

class SapaCockpitController extends Controller
{
    public function index()
    {
        if (Auth::check ()) {
            $vote = Vote::query ()->get ();
            return view ( 'admin.cockpit' )->with ( "voting" , $vote );
        } else {
            return redirect ( '/' );
        }
    }
}
