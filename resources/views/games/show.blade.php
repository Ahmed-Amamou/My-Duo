<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-600 dark:text-gray-200 leading-tight">
            {{ $game->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="py-12 max-w-7xl mb-1 pb-2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You successfully joined!") }}
                </div>
            </div>
        </div>
        <div class="align-items-center max-w-7xl mb-2 mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8 ">
                <div class="p-6 dark:text-gray-100">
                    {{ $game->name}}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 mt-4">
                    {{ $game->description}}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 mt-4">
                    {{ $game->platform}}
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title -->
    <div class="max-w-7xl mb-1 pb-2 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Posts') }}
            </h1>
        </div>
    </div>
    <div class="py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <!-- ... (other game details) ... -->

            <!-- Add Post Form -->
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="font-semibold text-xl mb-4">Add a Post</h2>
                {!! Form::open(['route' => ['games.posts.store', $game->id]]) !!}
                <div class="mb-4">
                    {!! Form::label('title', 'Title', ['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) !!}
                    {!! Form::text('title', null, ['class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-gray-700']) !!}
                </div>
                <div class="mb-4">
                    {!! Form::label('body', 'Body', ['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) !!}
                    {!! Form::textarea('body', null, ['class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-gray-700']) !!}
                </div>
                <x-primary-button>Add</x-primary-button>
                {!! Form::close() !!}
            </div>
        </div>

    @foreach($posts as $post)
        <div class="py-12">
            <div class="max-w-7xl mb-1 pb-2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{$post->body}}
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mb-2 mx-auto sm:px-6 lg:px-8">

            </div>
        </divclass>
    @endforeach
    </div>





</x-app-layout>
