<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$user = Auth::user();
		
        $users = DB::select('select * from users where identifier = ?', ['steam:'.dechex($user->steamid)]);

        return view('city', ['users' => $users]);
    }
	/**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
	public function profile()
    {
		$user = Auth::user();
		
        $users = DB::select('select * from users where identifier = ?', ['steam:'.dechex($user->steamid)]);

        return view('profile', ['users' => $users]);
    }
}
