<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(!Auth::check()){
			//Redirect ke halaman login
		}
        return view('admin.dashboard');
    }
}
