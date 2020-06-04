<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth');
    }



   	public function admindashboard()
    {
        return view('admin/dashboardAdmin');
    }
}
