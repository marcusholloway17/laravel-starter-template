<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <img src="{{ asset('/storage/' . $post->image) }}" alt="" srcset="">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <article class="mt-2 text-lg leading-8 text-gray-600"> {{ $post->content }}</article>
            <div class="flex items-center">
                <a href="{{ route('posts.edit', $post) }}"
                    class="bg-yellow-500 px-2 py-3 block text-left text-sm leading-4 font-medium text-gray-700 hover:text-gray-900 focus:outline-none focus:bg-yellow-500 focus:text-gray-900 transition duration-150 ease-in-out">
                    Editer </a>
                <a href=""
                    class="bg-yellow-500 px-2 py-3 block text-left text-sm leading-4 font-medium text-gray-700 hover:text-gray-900 focus:outline-none focus:bg-yellow-500 focus:text-gray-900 transition duration-150 ease-in-out">
                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('delete')
                        <button
                            class="bg-yellow-500 px-2 py-3 block text-left text-sm leading-4 font-medium text-gray-700 hover:text-gray-900 focus:outline-none focus:bg-yellow-500 focus:text-gray-900 transition duration-150 ease-in-out">
                            Supprimer
                        </button>
                    </form>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
