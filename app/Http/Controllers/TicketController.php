<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
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

    public function index(){
        $returnHTML = view('tickets')->render();
     //   echo $returnHTML;
        echo json_encode($returnHTML);
        return response()->json(array('success' => true, 'html'=> $returnHTML));
       // return view('tickets');
    }
}
