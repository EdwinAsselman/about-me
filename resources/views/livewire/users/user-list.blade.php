<div>
    <div class="flex place-content-between">
        <x-input name="search" wire:model="search" class="block bg-gray-200 p-2 m-1" placeholder="Search..." />
        <div>
            <span class="text-gray-500">Show users per page:</span>
            <select class="border-gray-400" name="perPage" wire:model="perPage">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>

    <table class="text-center m-4 w-full" wire:loading.class="opacity-70">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Age</th>
                <th class="px-4 py-2">Gender</th>
                <th class="px-4 py-2">Residence</th>
                <th class="px-4 py-2">Job</th>
                <th class="px-4 py-2">Website</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>
                        <div class="shrink-0 mr-3">
                            <a href="{{ route('users.user', [ 'userId' => $user->id ]) }}" class="flex">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                                <span class="py-2 px-2 text-blue-400 font-semibold capitalize">
                                    {{ $user->name }}
                                    @auth
                                        {{ Auth::user()->name == $user->name ? "(You)" : null }}
                                    @endauth
                                </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-4 py-5 capitalize">{{ $user->age }}</td>
                    <td class="px-4 py-5 capitalize">{{ $user->gender }}</td>
                    <td class="px-4 py-5 capitalize">{{ $user->residence }}</td>
                    <td class="px-4 py-5 capitalize">{{ $user->job }}</td>
                    <td class="px-4 py-5">
                        <a class="text-blue-400 font-semibold capitalize" href="{{ $user->website }}" target="_blank">{{ Str::remove('https://www.', $user->website) }}</a>
                    </td>
                    <td class="px-4 py-5 capitalize">
                        @auth
                            @if(Auth::user()->id == $user->id)
                                <a href="/user/profile">
                                    <x-button>Edit profile</x-button>
                                </a>
                            @endif
                        @endauth
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-gray-600 py-8">No users where found...</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
</div>
