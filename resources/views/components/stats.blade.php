<div>
    <h3 class="text-base font-semibold leading-6 text-gray-900">Last 30 days</h3>
    <dl
        class="mt-5 grid grid-cols-1 divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow md:grid-cols-3 md:divide-x md:divide-y-0">
        <div class="px-4 py-5 sm:p-6">
            <dt class="text-base font-normal text-gray-900">Monthly Revenue</dt>
            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                    RM {{ $revenue['new'] }}
                    <span class="ml-2 text-sm font-medium text-gray-500">from RM {{ $revenue['new'] }} </span>
                </div>
                <x-percentage-indicator :change="$revenue['change']" />
            </dd>
        </div>
        <div class="px-4 py-5 sm:p-6">
            <dt class="text-base font-normal text-gray-900">New Customers</dt>
            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                    {{ $customers['new'] }}
                    <span class="ml-2 text-sm font-medium text-gray-500">from {{ $customers['old'] }}</span>
                </div>

                <x-percentage-indicator :change="$customers['change']" />
            </dd>
        </div>
        <div class="px-4 py-5 sm:p-6">
            <dt class="text-base font-normal text-gray-900">Pending Order</dt>
            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                    {{ $pending_order }}
                </div>
            </dd>
        </div>
    </dl>

    <!-- Top Agents -->
    <h3 class="text-base font-semibold leading-6 text-gray-900 my-4">Top Agents</h3>
    <ul role="list" class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8">
        @foreach ($top_agents as $agent)
            <li class="overflow-hidden rounded-xl border border-gray-200">
                <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
                    <div class="text-sm font-medium leading-6 text-gray-900">{{ $agent->name }}</div>
                </div>
                <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Total Sales</dt>
                        <dd class="text-gray-700">{{ $agent->total_sale }}</dd>
                    </div>
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Earning</dt>
                        <dd class="flex items-start gap-x-2">
                            <div class="font-medium text-gray-900">RM {{ $agent->earning }}</div>
                        </dd>
                    </div>
                </dl>
            </li>
        @endforeach
    </ul>
</div>
