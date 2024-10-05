<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('products') }}" class="align-middle bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">View Products</a>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-8 bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="product" class="block text-lg font-medium text-gray-700">Product Name</label>
                    <input type="text" name="product" id="product" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('product') }}">
                    @error('product')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>



                <div>
                    <label for="category_id" class="block text-lg font-medium text-gray-700">Category</label>
                    <div class="flex items-center">
                        <select name="category_id" id="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>

                    </div>
                    @error('category_id')
                    <p class="text-red-600 text-lg mt-1">{{ $message }}</p>
                    @enderror
                </div>



                <div>
                    <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add Product
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>