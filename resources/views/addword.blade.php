<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('words.index') }}" class="align-middle bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">View Words</a>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-8 bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('words.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="word" class="block text-lg font-medium text-gray-700">Word</label>
                    <input type="text" name="word" id="product" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('word') }}">
                    @error('word')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>







                <div>
                    <button type="submit" class="mt-4 bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add Word
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>