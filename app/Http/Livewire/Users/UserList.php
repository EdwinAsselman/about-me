<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{   
    use WithPagination;

    // properties
    public $search;
    public $perPage = 10;

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
     * Reset the users page back to the first page, when using the search bar.
     * 
     * @return void
     */
    public function updatedSearch()
    {
        $this->resetPage();
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
            ->orWhere('job', 'like', '%'.$this->search.'%')
            ->orderBy('name')
            ->paginate($this->perPage);

        return $users;
    }
}
