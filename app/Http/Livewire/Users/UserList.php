<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{   
    /**
     * Return the Livewire view with all users.
     * 
     * @return Livewire\Component
     */
    public function render()
    {   
        // Get all users.
        $users = User::all();

        return view('livewire.users.user-list')
            ->with('users', $users);
    }
}
