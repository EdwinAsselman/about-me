<x-app-layout>
    <x-slot name="header">
        <div class="flex place-content-between">
            <div class="flex">
                <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2 px-2">
                    {{ __($user->name) }}
                </h2>
            </div>

            @auth
                @if(Auth::user()->id == $user->id)
                    <a href="/user/profile">
                        <x-button>Edit profile</x-button>
                    </a>
                @endif
            @endauth
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">  
            <x-breadcrumbs root="home" child="users" page="{{ $user->name }}"></x-breadcrumbs>
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                @livewire('users.user-details', [ 'user' => $user ])
            </div>
        </div>
    </div>
</x-app-layout>
