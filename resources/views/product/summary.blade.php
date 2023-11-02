<x-guest-layout>
    <div class="bg-white">
        <!-- Background color split screen for large screens -->
        <div class="hidden lg:block fixed top-0 left-0 w-1/2 h-full bg-white" aria-hidden="true"></div>
        <div class="hidden lg:block fixed top-0 right-0 w-1/2 h-full bg-indigo-900" aria-hidden="true"></div>

        <div class="relative grid grid-cols-1 gap-x-16 max-w-7xl mx-auto lg:px-8 lg:grid-cols-2 lg:pt-16">
            <h1 class="sr-only">Checkout</h1>

            <section aria-labelledby="summary-heading"
                class="bg-indigo-900 text-indigo-300 py-12 md:px-10 lg:max-w-lg lg:w-full lg:mx-auto lg:px-0 lg:pt-0 lg:pb-24 lg:bg-transparent lg:row-start-1 lg:col-start-2">
                <div class="max-w-2xl mx-auto px-4 lg:max-w-none lg:px-0">
                    <h2 id="summary-heading" class="sr-only">Order summary</h2>

                    <dl>
                        <dt class="text-sm font-medium">Amount due</dt>
                        <dd class="mt-1 text-3xl font-extrabold text-white">RM {{ $product->price }}</dd>
                    </dl>

                    <ul role="list" class="text-sm font-medium divide-y divide-white divide-opacity-10">
                        <li class="flex items-start py-6 space-x-4">
                            <img src="{{ $product->getMedia('product_photos')->first()->getUrl() }}"
                                alt="Front of zip tote bag with white canvas, white handles, and black drawstring top."
                                class="flex-none w-20 h-20 rounded-md object-center object-cover">
                            <div class="flex-auto space-y-1">
                                <h3 class="text-white">{{$product->name}}</h3>
                                <p>{{ $product->description }}</p>
                            </div>
                            <p class="flex-none text-base font-medium text-white">RM {{ $product->price }}</p>
                        </li>

                        <!-- More products... -->
                    </ul>

                    <dl class="text-sm font-medium space-y-6 border-t border-white border-opacity-10 pt-6">
                        <div class="flex items-center justify-between">
                            <dt>Subtotal</dt>
                            <dd>RM {{ $product->price }}</dd>
                        </div>

                        <div class="flex items-center justify-between">
                            <dt>Shipping</dt>
                            <dd>RM {{ $product->price }}</dd>
                        </div>

                        <div class="flex items-center justify-between">
                            <dt>Taxes</dt>
                            <dd>RM {{ $product->price }}</dd>
                        </div>

                        <div
                            class="flex items-center justify-between border-t border-white border-opacity-10 text-white pt-6">
                            <dt class="text-base">Total</dt>
                            <dd class="text-base">RM {{ $product->price }}</dd>
                        </div>
                    </dl>
                </div>
            </section>

            <section aria-labelledby="payment-and-shipping-heading"
                class="py-16 lg:max-w-lg lg:w-full lg:mx-auto lg:pt-0 lg:pb-24 lg:row-start-1 lg:col-start-1">
                <h2 id="payment-and-shipping-heading" class="sr-only">Payment and shipping details</h2>
                <livewire:city-state-selector :product="$product" />
            </section>
        </div>
    </div>
</x-guest-layout>
