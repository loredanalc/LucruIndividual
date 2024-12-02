<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-semibold mb-4">{{ $post->title }}</h3>
                    <p class="text-lg mb-4">{{ $post->content }}</p>
                    <p class="mb-4"><strong>Category:</strong> {{ $post->category->name }}</p>
                    <a href="{{ route('posts.index') }}" class="px-6 py-3 bg-gray-600 text-white rounded-md shadow-md hover:bg-gray-700">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
