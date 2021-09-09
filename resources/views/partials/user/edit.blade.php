<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section>
                            <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                                <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Update User
                                </h2>
                                <form action="/users/{{ $users->id }}/update" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="username">Name</label>
                                            <input id="username" type="text" name="name" value="{{ $users->name }}"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200"
                                                for="username">NickName</label>
                                            <input id="username" type="text" name="nickName"
                                                value="{{ $users->nickName }}"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="username">Year</label>
                                            <input id="username" type="text" name="year" value="{{ $users->year }}"
                                                class="
                        
                        
                        block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200"
                                                for="username">Adress</label>
                                            <input id="username" type="text" name="adress"
                                                value="{{ $users->adress }}"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200"
                                                for="username">E-mail</label>
                                            <input id="username" type="text" name="email" value="{{ $users->email }}"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="username">Role</label>
                                            <select class="my-1" name="role_id" required>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}"
                                                        {{ $users->roles->name == $role->name ? 'selected' : null }}>
                                                        {{ $role->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <x-button class="ml-4">
                                        {{ __('Update') }}
                                    </x-button>
                                </form>
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
