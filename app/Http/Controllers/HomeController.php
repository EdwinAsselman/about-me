<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Render the main page of the application.
     * 
     * @return Illuminate\Http\Response
     */
    public function render ()
    {
        return view('home');
    }
}
