<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-start gap-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('posts') }}
        </h2>
        <a href="{{route('posts.create')}}"><x-primary-button >new post</x-primary-button></a>
        </div>
    </x-slot>
    @foreach($posts as $post)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->content}}</p>
                    <a href="{{route('posts.edit',$post)}}"><x-secondary-button>edit</x-secondary-button></a>
                    <form action="{{route('posts.destroy',$post)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <x-danger-button type="submit">delete</x-danger-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
