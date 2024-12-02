<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Butonul pentru a crea o categorie nouă -->
                    <div class="mb-4">
                        <a href="{{ route('categories.create') }}" class="inline-block p-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-700">
                            Create New Category
                        </a>
                    </div>

                    <div>
                        @foreach ($categories as $category)
                            <div class="mb-4 p-4 bg-gray-100 rounded-lg shadow-md flex items-center justify-between">
                                <h3 class="font-semibold text-lg">{{ $category->name }}</h3>
                                <div class="mt-2 flex items-center justify-between">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-600">Edit</a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block ml-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
