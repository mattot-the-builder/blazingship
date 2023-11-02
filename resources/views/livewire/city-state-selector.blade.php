<form action="{{ route('checkout', $product->id) }}" method="POST">
@csrf
    <div class="max-w-2xl mx-auto px-4 lg:max-w-none lg:px-0">
        <div>
            <h3 id="contact-info-heading" class="text-lg font-medium text-gray-900">Contact information
            </h3>

            <div class="mt-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <div class="mt-1">
                    <input type="text" id="name" name="name" autocomplete="name"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <div class="mt-6">
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone
                    Number</label>
                <div class="mt-1">
                    <input type="tel" id="phone_number" name="phone_number" autocomplete="tel"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>
        </div>

        <div class="mt-10">
            <h3 class="text-lg font-medium text-gray-900">Shipping address</h3>

            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                <div class="sm:col-span-3">
                    <label for="line_1" class="block text-sm font-medium text-gray-700">Line 1</label>
                    <div class="mt-1">
                        <input type="text" id="line_1" name="line_1" autocomplete="street-address"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="line_2" class="block text-sm font-medium text-gray-700">Line 2</label>
                    <div class="mt-1">
                        <input type="text" id="line_2" name="line_2" autocomplete="street-address"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="region" class="block text-sm font-medium text-gray-700">State /
                        Province</label>
                    <div class="mt-1">
                        <select id="state" name="state" autocomplete="state"
                            wire:change="selectState($event.target.value)"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option selected disabled>Select state</option>
                            @foreach ($states as $state)
                                <option value="{{ $state }}">{{ $state }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <div class="mt-1">
                        <select id="city" name="city" autocomplete="city"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option selected disabled>Select city</option>
                            @if ($selected_state)
                                @foreach ($cities as $city)
                                    <option value="{{ $city }}">{{ $city }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>


                <div>
                    <label for="postcode" class="block text-sm font-medium text-gray-700">Postal
                        code</label>
                    <div class="mt-1">
                        <input type="number" id="postcode" name="postcode" autocomplete="postcode"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10">
            <h3 class="text-lg font-medium text-gray-900">Billing information</h3>

            <div class="mt-6 flex items-center">
                <input id="same-as-shipping" name="same-as-shipping" type="checkbox" checked
                    class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <div class="ml-2">
                    <label for="same-as-shipping" class="text-sm font-medium text-gray-900">Same as
                        shipping information</label>
                </div>
            </div>
        </div>

        <div class="mt-10 flex justify-end pt-6 border-t border-gray-200">
            <button type="submit"
                class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Pay
                now</button>
        </div>
    </div>
</form>
