<x-layout>

    <x-slot:title>
        Create Job
    </x-slot:heading>

    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label for="title" class="block text-sm font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white border border-gray-300 focus-within:border-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600">
                                <input type="text" name="title" id="title"
                                    class="block w-full py-2 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm"
                                    placeholder="Shift Leader" required>
                            </div>

                            @error('title')
                                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="salary" class="block text-sm font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white border border-gray-300 focus-within:border-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600">
                                <input type="text" name="salary" id="salary"
                                    class="block w-full py-2 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm"
                                    placeholder="$10,000">
                            </div>
                            @error('salary')
                                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs/">
                    <button type="button"
                        class="rounded-md bg-gray-300 px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs hover:bg-gray-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
                        Cancel
                    </button>
                </a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
                    Save
                </button>

            </div>
        </div>

    </form>

</x-layout>
