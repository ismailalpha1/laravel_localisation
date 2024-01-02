<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing_page(){
        return view('user.landingpage.appointment');
    }
}
