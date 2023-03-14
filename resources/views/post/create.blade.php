<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rédiger un nouvel article') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        <div class="my-5">
            @foreach ($errors->all() as $error)
                <span class="block text-red-500">
                    {{ $error }}
                </span>
            @endforeach
        </div>


        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="mt-10">
            @csrf
            <x-input-label for="title" value="Titre"></x-input-label>
            <x-text-input id="title" name="title"></x-text-input>

            <x-input-label for="title" value="Contenu"></x-input-label>
            <textarea name="content" id="content"></textarea>

            <x-input-label for="image" value="Image mise en avant"></x-input-label>
            <x-text-input id="image" name="image" type=file></x-text-input>

            <x-input-label for="category" value="Categorie"></x-input-label>
            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->label }}</option>
                @endforeach
            </select>

            <button style="display: block !important" class="mt-5">Publier</button>
        </form>
    </div>
</x-app-layout>
