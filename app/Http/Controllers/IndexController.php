<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return view('dashboard');
        }
        return view('welcome');
    }
}
