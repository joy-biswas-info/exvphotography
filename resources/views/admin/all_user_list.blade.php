<x-app-layout>

    <div>
        @php
        $userCount = $users->count();
        @endphp
        @if ($userCount == 0)
            <h2>No User Found</h2>
        @endif
    </div>

    <div
    class="p-10 bg-white"
    >
    <div class="p-6 border-separate">
        <table class="w-full bg-white border border-gray-300 p-6">
            <thead class=" mb-4">
                <tr class="bg-gray-100 mb-4">
                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border border-slate-600">ID</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border border-slate-600">Name</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border border-slate-600">Phone</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border border-slate-600">Email</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700 border border-slate-600">Send</th>
                </tr>
            </thead>
            @foreach($users as $user)

            <tbody>
                <tr class="mb-3 border-b-2">
                    <td class="px-6 border border-slate-600">{{$user->id}}</td>
                    <td class="px-6 py-3 text-left font-semibold text-gray-700 underline border-slate-600">
                        <a href="/all-users/{{$user->id}}">{{$user->name}}</a>
                    </td>
                    <td class="px-6 border py-3 text-left font-semibold text-gray-700 border-slate-600">{{$user->phone}}</td>
                    <td class="px-6 border py-3 text-left font-semibold text-gray-700 border-slate-600">{{$user->email}}</td>
                    <td class="px-6 border py-3 text-left font-semibold text-gray-700 border-slate-600">
                        <button class=" bg-red-500 px-4 py-1 rounded text-white">
                            <a href="/all-users/{{$user->id}}">Send</a>
                        </button>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

</x-app-layout>