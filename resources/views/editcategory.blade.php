<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('categories.index') }}" class="align-middle bg-blue-500 ml-3 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Back</a>
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-8 bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700">Category Name</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full min-w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('name', $category->category) }}">
                    @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="mt-4 bg-red-500 text-white hover:bg-blue-700  font-bold py-2 px-4 rounded">
                        Save </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>