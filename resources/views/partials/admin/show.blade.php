<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show') }}
        </h2>
    </x-slot>
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section>
                            <div
                                class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                <div class="w-1/3 bg-cover"
                                    style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')">
                                </div>

                                <div class="w-2/3 p-4 md:p-4">
                                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
                                        {{ $show->name . ' ' . $show->nickName }}</h1>

                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Age : {{ $show->year }}
                                    </p>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Adress :
                                        {{ $show->adress }}</p>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">E-mail :
                                        {{ $show->email }}</p>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 capitalize">Role :
                                        {{ $show->users->name }}</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
