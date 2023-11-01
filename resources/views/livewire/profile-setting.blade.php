    <!-- Settings forms -->
    <div class="divide-y divide-gray/5">
        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-700">Use a permanent address where you can receive mail.</p>
            </div>

            <form class="md:col-span-2" wire:submit.prevent="updateProfile">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
                    <div class="col-span-full flex items-center gap-x-8">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover">
                        <div>
                            <button type="button"
                                class="rounded bg-white px-2 py-1 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change
                                avatar</button>
                            <p class="mt-2 text-xs leading-5 text-gray-700">JPG, GIF or PNG. 1MB max.</p>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input wire:model="name" type="text" name="name" id="name"
                                autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ auth()->user()->name }}">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                            address</label>
                        <div class="mt-2">
                            <input wire:model="email" id="email" name="email" type="email" autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ auth()->user()->email }}">
                        </div>
                    </div>

                </div>

                <div class="mt-8 flex items-center">
                    <button wire:click="updateProfile"
                        class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                    {!! $message !!}
                </div>
            </form>
        </div>

        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Change password</h2>
                <p class="mt-1 text-sm leading-6 text-gray-700">Update your password associated with your account.</p>
            </div>

            <form class="md:col-span-2" wire:submit.prevent="updatePassword">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="current-password" class="block text-sm font-medium leading-6 text-gray-900">Current
                            password</label>
                        <div class="mt-2">
                            <input wire:model="current_password" id="current-password" name="current_password"
                                type="password" autocomplete="current-password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="new-password" class="block text-sm font-medium leading-6 text-gray-900">New
                            password</label>
                        <div class="mt-2">
                            <input wire:model="new_password" id="new-password" name="new_password" type="password"
                                autocomplete="new-password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>


                    <div class="col-span-full">
                        <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-900">Confirm
                            password</label>
                        <div class="mt-2">
                            <input id="confirm-password" name="confirm_password" type="password"
                                autocomplete="new-password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex">
                    <button wire:click="updatePassword"
                        class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                    {!! $message !!}

                </div>
            </form>
        </div>

        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Log out other sessions</h2>
                <p class="mt-1 text-sm leading-6 text-gray-700">Please enter your password to confirm you would like to
                    log out of your other sessions across all of your devices.</p>
            </div>

            <form class="md:col-span-2">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="logout-password" class="block text-sm font-medium leading-6 text-gray-900">Your
                            password</label>
                        <div class="mt-2">
                            <input id="logout-password" name="password" type="password" autocomplete="current-password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex">
                    <button type="submit"
                        class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Log
                        out other sessions</button>
                </div>
            </form>
        </div>

        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Delete account</h2>
                <p class="mt-1 text-sm leading-6 text-gray-700">No longer want to use our service? You can delete your
                    account here. This action is not reversible. All information related to this account will be deleted
                    permanently.</p>
            </div>

            <form class="flex items-start md:col-span-2">
                <button type="submit"
                    class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400">Yes,
                    delete my account</button>
            </form>
        </div>
    </div>
