<div>
    <div class="m-4"> 
        <h2 class="text-xl pb-3">About user</h2>

        <table>
            <tr>
                <th class="px-2 text-left py-1">Age</th>
                <td class="px-2 text-left py-1">{{ $user->age }}</td>
            </tr>
            <tr>
                <th class="px-2 text-left py-1">Gender</th>
                <td class="px-2 text-left py-1">{{ $user->gender }}</td>
            </tr>
            <tr>
                <th class="px-2 text-left py-1">Residence</th>
                <td class="px-2 text-left py-1">{{ $user->residence }}</td>
            </tr>
            <tr>
                <th class="px-2 text-left py-1">Job</th>
                <td class="px-2 text-left py-1">{{ $user->job }}</td>
            </tr>
            <tr>
                <th class="px-2 text-left py-1">Email</th>
                <td class="px-2 text-left py-1">
                    <a class="text-blue-400 font-semibold" href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                </td>
            </tr>
            <tr>
                <th class="px-2 text-left py-1">Website</th>
                <td class="px-2 text-left py-1">
                    <a class="text-blue-400 font-semibold" href="{{ $user->website }}" target="_blank" rel="noopener noreferrer">{{ $user->website }}</a>
                </td>
            </tr>
        </table>
    </div>

    <table class="m-4">
        <tr>
            <td class="px-2 py-1">{{ $user->about_me }}</td>
        </tr>
        <tr>
            <td class="px-2 py-5 font-semibold text-gray-600">Joined on: {{ date('jS M Y', strtotime($user->created_at)) }}</td>
        </tr>
    </table>
</div>