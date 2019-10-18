<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_web.search_pr_input');
        // return view('my-search');
    }

    public function viewSearch()
    {
        $users=User::all();

        return view('my-search', compact('users'));
    }


    public function mySearch()
    {
            $search = \Request::get('search'); //<-- we use global request to get the param of URI

            $users = User::where('last_name','like','%'.$search.'%')
                    ->orderBy('id')
                    ->paginate(20);

            return view('user_web.search_input', compact('users'));


        // $searchkey = \Request::get('name');
        // $users = DB::where('Select * from User where last_name=$searchkey');
        // // return view('search_input', compact('users'));
        // return view('user_web.search_input', compact('users'));
        
    }

    public function Search(Request $request)
    {
        
        $search = $request->get('search');    
        $users = DB::table('users')->where('last_name', 'LIKE', '%' .$search. '%')->paginate(5);
        // $users = DB::table('users')->where('last_name', 'LIKE', '%' . $search . '%');
        return view('user_web.search_input', compact('users'));

    }

    public function payroll(Request $request)
    {
               
        return view('user_web.search_payroll_input');
    }

    public function voucher()
    {
        return view('user_web.search_voucher_input');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myTestAddToLog()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }

}
