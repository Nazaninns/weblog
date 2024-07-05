<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-start gap-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{'edit post' }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <form method="post" action="{{ route('posts.update',$post) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('PATCH')
                        <div>
                            <x-input-label for="title" :value="'title'" />
                            <x-text-input id="title" name="title" type="text" :value="old('title', $post->title)" class="mt-1 block w-full"  />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="content" :value="'content'" />
                            <x-text-input id="content" name="content" type="text" :value="old('content', $post->content)" class="mt-1 block w-full"  />
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

