{{--@foreach($userPosts as $userPost)--}}

{{--    <li>{{$userPost}}</li>--}}

{{--@endforeach--}}
{{--Page showing all games--}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-red-500 leading-tight">
            {{ __('GAMES') }}
        </h2>
    </x-slot>
    @foreach($games as $game )
        <div class="mt-4 pr-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-1">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg flex">
                    <div class="max-w-xl">
                        {{--                    @include('profile.partials.update-profile-information-form')--}}
                        <div class="items-center flex ">



                            <h1 class="font-semibold text-gray-800 dark:text-gray-200 leading-tight mt-2 pr-4">
                                {{$game->name}}
                            </h1>

                            <h1 class="font-semibold text-gray-800 dark:text-gray-500 leading-tight mt-2 pr-4 ">
                                {{$game->platform}}
                            </h1>

                            <h1 class="font-semibold text-gray-800 dark:text-gray-200 leading-tight mt-2 pr-4">
                                {{$game->genre}}
                            </h1>

                            <h1 class="font-semibold text-gray-800 dark:text-gray-200 leading-tight mt-2 pr-4">
                                {{$game->description}}
                            </h1>
                            @if(auth()->user()->games->contains($game))
                                <form class="flex" action="{{route('games.unfollow',$game->id)}}" method="post">
                                    <x-primary-button>{{ __('Unfollow') }}</x-primary-button>

                                </form>
                                @csrf
                                <x-primary-button class="flex pl-4">{{ __('View Community') }}</x-primary-button>
                            @else
                                <form action="{{route('games.follow',$game->id)}}" method="post">
                                    @csrf
                                    <x-primary-button type="submit">{{ __('follow') }}</x-primary-button>
                                </form>
                            @endif
                        </div>


                    </div>
                </div>
            </div>
    @endforeach

</x-app-layout>

