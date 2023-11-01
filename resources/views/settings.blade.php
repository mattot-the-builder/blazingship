<x-app-layout>
    <header class="border-b border-white/5">
        <!-- Secondary navigation -->
        <nav class="flex overflow-x-auto py-4">
            <ul role="list"
                class="flex min-w-full flex-none gap-x-6 px-4 text-sm font-semibold leading-6 text-gray-900 sm:px-6 lg:px-8">
                <li>
                    <a href="#" class="text-indigo-700">Account</a>
                </li>
                <li>
                    <a href="#" class="">Notifications</a>
                </li>
                <li>
                    <a href="#" class="">Billing</a>
                </li>
                <li>
                    <a href="#" class="">Teams</a>
                </li>
                <li>
                    <a href="#" class="">Integrations</a>
                </li>
            </ul>
        </nav>
    </header>

    <livewire:profile-setting />

</x-app-layout>
