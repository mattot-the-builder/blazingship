<x-guest-layout>
    <div class="pt-6 pb-16 sm:pb-24">
        <div class="max-w-3xl mx-auto">
            <div class="max-w-xl">
                <h1 class="text-sm font-semibold uppercase tracking-wide text-indigo-600">Thank you!</h1>
                <p class="mt-2 text-4xl font-extrabold tracking-tight sm:text-5xl">It's on the way!</p>
                <p class="mt-2 text-base text-gray-500">Your order <b>#{{ $order->id }}</b> has been placed and will be with you soon.</p>

                <dl class="mt-12 text-sm font-medium">
                    <dt class="text-gray-900">Tracking number</dt>
                    <dd class="text-indigo-600 mt-2">51547878755545848512</dd>
                </dl>
            </div>

            <section aria-labelledby="order-heading" class="mt-10 border-t border-gray-200">
                <h2 id="order-heading" class="sr-only">Your order</h2>

                <h3 class="sr-only">Items</h3>

                <div class="py-10 border-b border-gray-200 flex space-x-6">
                    <img src="{{ $order->product->getMedia('product_photos')->first()->getUrl() }}"
                        alt="Glass bottle with black plastic pour top and mesh insert."
                        class="flex-none w-20 h-20 object-center object-cover bg-gray-100 rounded-lg sm:w-40 sm:h-40">
                    <div class="flex-auto flex flex-col">
                        <div>
                            <h4 class="font-medium text-gray-900">
                                <a href="#"> {{ $order->product->name }} </a>
                            </h4>
                            <p class="mt-2 text-sm text-gray-600">{{ $order->product->description }}</p>
                        </div>
                        <div class="mt-6 flex-1 flex items-end">
                            <dl class="flex text-sm divide-x divide-gray-200 space-x-4 sm:space-x-6">
                                <div class="flex">
                                    <dt class="font-medium text-gray-900">Quantity</dt>
                                    <dd class="ml-2 text-gray-700">{{ $order->quantity }}</dd>
                                </div>
                                <div class="pl-4 flex sm:pl-6">
                                    <dt class="font-medium text-gray-900">Price</dt>
                                    <dd class="ml-2 text-gray-700">RM {{ $order->total }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="sm:ml-40 sm:pl-6">
                    <h3 class="sr-only">Your information</h3>

                    <h4 class="sr-only">Addresses</h4>
                    <dl class="grid grid-cols-2 gap-x-6 text-sm py-10">
                        <div>
                            <dt class="font-medium text-gray-900">Shipping address</dt>
                            <dd class="mt-2 text-gray-700">
                                <address class="not-italic">
                                    <span class="block">{{ $order->address }}</span>
                                    <span class="block">{{ $order->postcode . ' ' . $order->city }}</span>
                                    <span class="block">{{ $order->state . ', ' . $order->country }}</span>
                                </address>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-900">Billing address</dt>
                            <dd class="mt-2 text-gray-700">
                                <address class="not-italic">
                                    <span class="block">{{ $order->address }}</span>
                                    <span class="block">{{ $order->postcode . ' ' . $order->city }}</span>
                                    <span class="block">{{ $order->state . ', ' . $order->country }}</span>
                                </address>
                            </dd>
                        </div>
                    </dl>

                    <h4 class="sr-only">Payment</h4>
                    <dl class="grid grid-cols-2 gap-x-6 border-t border-gray-200 text-sm py-10">
                        <div>
                            <dt class="font-medium text-gray-900">Payment method</dt>
                            <dd class="mt-2 text-gray-700">
                                <p>{{ $order->payment_method }}</p>
                                <p><span aria-hidden="true">•••• </span><span class="sr-only">Ending in </span>1545</p>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-900">Shipping method</dt>
                            <dd class="mt-2 text-gray-700">
                                <p>DHL</p>
                                <p>Takes up to 3 working days</p>
                            </dd>
                        </div>
                    </dl>

                    <h3 class="sr-only">Summary</h3>

                    <dl class="space-y-6 border-t border-gray-200 text-sm pt-10">
                        <div class="flex justify-between">
                            <dt class="font-medium text-gray-900">Subtotal</dt>
                            <dd class="text-gray-700">RM {{$session->amount_subtotal / 100}}</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="flex font-medium text-gray-900">
                                Discount
                                <span
                                    class="rounded-full bg-gray-200 text-xs text-gray-600 py-0.5 px-2 ml-2">STUDENT50</span>
                            </dt>
                            <dd class="text-gray-700">-$18.00 (50%)</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="font-medium text-gray-900">Shipping</dt>
                            <dd class="text-gray-700">RM 5.00</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="font-medium text-gray-900">Total</dt>
                            <dd class="text-gray-900">RM {{$session->amount_total / 100}}</dd>
                        </div>
                    </dl>
                </div>
            </section>
        </div>
    </div>

</x-guest-layout>
