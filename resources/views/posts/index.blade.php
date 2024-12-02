<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('posts.create') }}" class="px-6 py-3 bg-green-600 text-white rounded-md shadow-md hover:bg-green-700 mb-4">
                        Create New Post
                    </a>
                    <div class="mb-1 mt-5 p-3 bg-slate-100 flex items-center justify-between">
                        <h3 class="text-lg font-semibold">Title</h3>
                        <p><strong>Content</strong></p>
                        <p><strong>Category</strong></p>
                        <p><strong>Controls</strong></p>
                        </div>
                    @foreach ($posts as $post)
                        <div class="mb-1 p-3 bg-slate-100 flex items-center justify-between">
                            <a href={{route('posts.show', $post->id)}} class='text-lg font-semibold'>{{$post->title}}</a>
                            <p>{{ Str::limit($post->content, 10) }}...</p>
                            <p>{{ $post->category->name }}</p>
                            <div>
                                <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-600">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block ml-4">
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
</x-app-layout>
