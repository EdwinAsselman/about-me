<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class UserDetails extends Component
{
    // properties
    public $user;

    /**
     * Get the user automatically.
     * 
     * @return void
     */
    public function mount($user)
    {
        $this->user = $user;
    }
    
    /**
     * Render the Livewire component
     * 
     * @return Livewire\Component
     */
    public function render()
    {
        return view('livewire.users.user-details');
    }
}
