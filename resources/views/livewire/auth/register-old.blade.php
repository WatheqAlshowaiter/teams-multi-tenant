@section('title', 'Create a new account')

<div>
    @section('body')

        <div>
            <div class="min-h-full flex">
                <!--
                              This example requires Tailwind CSS v2.0+

                              This example requires some changes to your config:

                              ```
                              // tailwind.config.js
                              module.exports = {
                                // ...
                                plugins: [
                                  // ...
                                  require('@tailwindcss/forms'),
                                ],
                              }
                              ```
                            -->
                <!--
                              This example requires updating your template:

                              ```
                              <html class="h-full bg-white">
                              <body class="h-full">
                              ```
                            -->
                <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
                    <div class="mx-auto w-full max-w-sm lg:w-96">
                        <div>
                        <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                            alt="Workflow">
                            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                                Start your free trial
                            </h2>
                        </div>

                        <div class="mt-8">

                            <div class="mt-6">
                                {{ $errors }}
                                <form wire:submit.prevent="register" class="space-y-6">

                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700">
                                            Name
                                        </label>
                                        <div class="mt-1">
                                            <input wire:model="name" id="name" name="name" type="text"
                                                autocomplete="name"
                                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="company-name" class="block text-sm font-medium text-gray-700">
                                            Company Name
                                        </label>
                                        <div class="mt-1">
                                            <input wire:model="companyName" id="company-name" name="companyName"
                                                type="text" autocomplete="company-name"
                                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700">
                                            Email address
                                        </label>
                                        <div class="mt-1">
                                            <input wire:model="email" id="email" name="email" type="email"
                                                autocomplete="email"
                                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    </div>

                                    <div class="space-y-1">
                                        <label for="password" class="block text-sm font-medium text-gray-700">
                                            Password
                                        </label>
                                        <div class="mt-1">
                                            <input wire:model="password" id="password" name="password" type="password"
                                                autocomplete="current-password"
                                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit"
                                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Register
                                        </button>
                                        {{-- <input
                                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    type="submit" value="Register"> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block relative w-0 flex-1">
                    <img class="absolute inset-0 h-full w-full object-cover"
                        src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
                        alt="">
                </div>
            </div>
        </div>
    @endsection
</div>
