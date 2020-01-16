<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailMailable;
use App\User ;
use Illuminate\Http\Request;
use Illuminate\Mail\SendQueuedMailable;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Mail;

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
       // dd(auth()->user()->notifications);
        $user=User::find(1);
        return view('home',compact('user'));
    }
    public function form($lang=null)
    {
        App::setlocale($lang);
        return view('form');
    }
   // public function sendEmail()
   // {
    //    Mail::to('ibrhimsorycamara77@gmail.com')->send(new SendEmailMailable());
   // }

    public function store(Request $request)
    {
        return $request->all();
    }
    public function search($searchkey)
    {
        $users = User::search($searchkey)->get();
        return view('search',compact('users'));
    }

}
