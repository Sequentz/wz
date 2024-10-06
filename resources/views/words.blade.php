<x-app-layout>
    <div class="container mx-auto mt-8 flex justify-center">
        <button class="hover:bg-red-700 bg-red-500 text-white font-bold py-2 px-4 rounded">
            <a href="{{ route('words.create') }}">Add Word</a>
        </button>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium">@sortablelink('id', 'ID') <span class="inline-block ml-1">⬍</span></th>
                    <th class="px-6 py-3 text-left text-sm font-medium">@sortablelink('word', 'Name') <span class="inline-block ml-1">⬍</span></th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Edit</th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Delete</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @if($words->count())
                @foreach($words as $word)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $word->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $word->word }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <a href="{{ route('words.edit', $word->id) }}" class="text-blue-500 hover:text-blue-700">✏️</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <form action="{{ route('words.destroy', $word->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                🗑️
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" colspan="5">No words found</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex justify-center">
        {!! $words->appends(request()->except('page'))->links() !!}
    </div>
</x-app-layout>