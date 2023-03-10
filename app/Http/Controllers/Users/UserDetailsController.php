<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    /**
     * Render the details for a user view.
     * 
     * @return Illuminate\Http\Response
     */
    public function render ($userId)
    {
        $user = User::findOrFail($userId);

        return view('users.user-details')->with('user', $user);
    }
}
