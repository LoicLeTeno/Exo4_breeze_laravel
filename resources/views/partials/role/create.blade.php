<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <section>
                            <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                                <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Add a role
                                </h2>
                                <form action="/role" method="POST">
                                    @csrf
                                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="username">Role</label>
                                            <input id="username" type="text" name="role"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        </div>
                                    </div>

                                    <div class="flex justify-end mt-6">
                                        <button type="submit"
                                            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
                                    </div>
                                </form>
                            </section>
                            <section>
                                <table class="table-auto container text-center mt-8 border-separate border-4">
                                    <thead>
                                        <tr>
                                            <th class="border-2">#</th>
                                            <th class="border-2">Role</th>
                                            <th class="border-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td class="border-2">{{ $role->id }}</td>
                                                <td class="border-2">{{ $role->name }}</td>
                                                <td>
                                                    <form action="/role/{{ $role->id }}" method="POST"
                                                        class="border-2 p-1">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-400 rounded-md dark:bg-gray-800 hover:bg-red-600 dark:hover:bg-gray-700 focus:outline-none focus:bg-red-500 dark:focus:bg-gray-700">Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
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
</x-app-layout
