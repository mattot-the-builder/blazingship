<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="categoryForm"
    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    <!-- Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">>

            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

                        <div class="sm:flex sm:items-start">
                            <div class="space-y-12">
                                <div class="">
                                    <h2 class="text-base font-semibold leading-7 text-gray-900 mt-4">Add new category
                                    </h2>
                                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <label for="name"
                                                class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                            <div class="mt-2">
                                                <input type="text" name="name" id="name" autocomplete="name"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>

                                        <div class="col-span-full">
                                            <label for="description"
                                                class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                            <div class="mt-2">
                                                <textarea id="description" name="description" rows="3"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                            </div>
                                            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences
                                                description about the
                                                category.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="submit"
                            class="rounded-md bg-indigo-600 ml-2 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        <button type="button" @click="categoryForm = false"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
