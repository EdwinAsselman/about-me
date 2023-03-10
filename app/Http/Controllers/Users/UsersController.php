<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Render the users view.
     * 
     * @return Illuminate\Http\Response
     */
    public function render ()
    {
        return view('users.all-users');
    }
}
