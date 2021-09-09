<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section>
                            <section>
                                <table class="table-auto container text-center mt-8 border-separate border-4">
                                    <thead>
                                        <tr>
                                            <th class="border-2">#</th>
                                            <th class="border-2">Name</th>
                                            <th class="border-2">NickName</th>
                                            <th class="border-2">Age</th>
                                            <th class="border-2">Adress</th>
                                            <th class="border-2">E-mail</th>
                                            <th class="border-2">Role</th>
                                            <th class="border-2">Action</th>
                                            <th class="border-2">Action</th>
                                            <th class="border-2">Action</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            @if ($user->role_id != 1)
                                                <tr>
                                                    <td class="border-2">{{ $user->id }}</td>
                                                    <td class="border-2">{{ $user->name }}</td>
                                                    <td class="border-2">{{ $user->nickName }}</td>
                                                    <td class="border-2">{{ $user->year }}</td>
                                                    <td class="border-2">{{ $user->adress }}</td>
                                                    <td class="border-2">{{ $user->email }}</td>
                                                    <td class="border-2">{{ $user->roles->name }}</td>
                                                    <td>
                                                        <form action="/dashboard/{{ $user->id }}" method="POST"
                                                            class="border-2 p-1">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-400 rounded-md dark:bg-gray-800 hover:bg-red-600 dark:hover:bg-gray-700 focus:outline-none focus:bg-red-500 dark:focus:bg-gray-700">Delete
                                                            </button>

                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a class="px-4 py-2 font-medium tracking-wide text-white capitalize
                                transition-colors duration-200 transform bg-red-400 rounded-md dark:bg-gray-800
                                hover:bg-red-600 dark:hover:bg-gray-700 focus:outline-none focus:bg-red-500
                                dark:focus:bg-gray-700"
                                                            href="/users/{{ $user->id }}/edit">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a class="px-4 py-2 font-medium tracking-wide text-white capitalize
                                    transition-colors duration-200 transform bg-red-400 rounded-md dark:bg-gray-800
                                    hover:bg-red-600 dark:hover:bg-gray-700 focus:outline-none focus:bg-red-500
                                    dark:focus:bg-gray-700"
                                                            href="/dashboard/{{ $user->id }}/show">Show</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
