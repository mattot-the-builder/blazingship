<div class="col-span-full">
    <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
    <div class="mt-2 flex items-center gap-x-3">

        <figure class="max-w-lg">
            <img class="h-auto max-w-1/3 rounded-lg" src="{{$image}}" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Image caption</figcaption>
        </figure>
        <div class="ml-4">
            <input wire:model="image"
                class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                JPG
                or GIF (MAX. 800x400px).</p>
        </div>
    </div>
</div>
