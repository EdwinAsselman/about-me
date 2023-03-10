<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{   
    // properties
    public $search;

    /**
     * Return the Livewire view with all users.
     * 
     * @return Livewire\Component
     */
    public function render()
    {  
        $users = $this->getUsers();

        return view('livewire.users.user-list')
            ->with('users', $users);
    }

    /**
     * Get all users, with optional modified results.
     * 
     * @return Collection
     */
    private function getUsers()
    {
        $users = User::where('name', 'like', '%'.$this->search.'%')
            ->orWhere('residence', 'like', '%'.$this->search.'%')
            ->orWhere('job', 'like', '%'.$this->search.'%')->get();

        return $users;
    }
}
