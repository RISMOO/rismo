<?php

namespace App\Http\Controllers;
use App\User;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {

        $date1= date('Y-m-d');
        setlocale(LC_TIME, "fr_FR","French");
        $date = strftime("%A %d %B %Y", strtotime($date1));
        $user_id=auth()->user()->id;
        $user=User::find($user_id);


        return view('home')->with(['messages'=> $user->messages,
        'date'=>$date]);
    }
}
