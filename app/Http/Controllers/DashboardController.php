<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('inprogress');
    }

    public function index(){
        $data['statusResult'] = DB::table('tbl_status')->get();
        $data['taskResult'] = DB::table('tbl_task')->get();
      //  dd($data);
        return view('dashboard',$data);
    }

    public function editcard(Request $request){
        dd($request);
        // $data['statusResult'] = DB::table('tbl_status')->get();
        // $data['taskResult'] = DB::table('tbl_task')->get();
    
    }
}
