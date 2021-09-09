<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach ($admins as $admin)
        <section class="my-5">
            <div class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="w-1/3 bg-cover"
                    style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
                </div>

                <div class="w-2/3 p-4 md:p-4">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
                        {{ $admin->name . ' ' . $admin->lastname }}</h1>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Age : {{ $admin->age }}</p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Adress : {{ $admin->adress }}</p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">E-mail : {{ $admin->email }}</p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 capitalize">Role :
                        {{ $admin->users->name }}</p>

                        <div class="flex justify-between mt-3 item-center">
                            <a class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600" href="/dashboard/{{$admin->id}}/show">Show</a>
                            @if ($admin->id != Auth::user()->id)
                            <form action="/dashboard/{{ $admin->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">DELETE</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endforeach
</x-app-layout>