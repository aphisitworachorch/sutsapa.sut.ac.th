<?php

namespace App\Http\Controllers;

use App\Models\Advocacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class AdvocacyReportView extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check ()) {
            if ($request->ajax ()) {
                $data = Advocacy::query ()->get ();
                return DataTables::of ( $data )
                    ->make ( true );
            }
            return view ( 'admin.advocacyview' )->with ( 'title' , 'ข้อมูลการร้องเรียนของศูนย์ฯ' );
        } else {
            return redirect ( '/' );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Validator::make ( $request->all () , [
            'feedback_title' => 'required' ,
            'feedback_content' => 'required' ,
            'feedback_type' => 'required' ,
            'feedback_contact' => 'required'
        ] );

        if ($data->fails ()) {
            return response ()->json ( ['status' => 'input_failed'] );
        }

        $input = $request->all ();
        $advocacy = Advocacy::create ( $input );

        return response ()->json ( ['status' => 'success'] );
    }

}
