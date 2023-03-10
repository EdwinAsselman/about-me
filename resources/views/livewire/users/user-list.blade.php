<div>
    <table class="text-center m-4">
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
            @foreach($users as $user)
                <tr>
                    <td>
                        <div class="shrink-0 mr-3">
                            <a href="{{ route('users.user', [ 'userId' => $user->id ]) }}" class="flex">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                                <span class="py-2 px-2 text-blue-400 font-semibold capitalize">
                                    {{ $user->name }} {{ Auth::user()->name == $user->name ? "(You)" : null }}
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
                        @if(Auth::user()->name == $user->name)
                            <a href="/user/profile">
                                <x-button>Edit profile</x-button>
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>