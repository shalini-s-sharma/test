<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Socialite;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
       // return view('front/home');
    }

    public function contactus(Request $request){
        $post = $request->all();
        $validatedData = $request->validate([
            'name'=>'required',
            'email' => 'required|max:255',
            'message' => 'required',
            'subject'=>'required',
        ]);

        $contact = Contact::insertNewContact($post);
        if($contact){
            $response = ['status_code'=>200,'message' => 'Thanks we will contact you soon'];
        }

        return response()->json($response);

    }
    
    function googleCallback(){
        try{
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id',$user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('dashboard');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id
                ]);
  
                Auth::login($newUser);
   
                return redirect()->back();
            }

        }catch(Exception $e){
            return redirect('google');
        }
    }

    function download(){
        return view('download');
    }
}
