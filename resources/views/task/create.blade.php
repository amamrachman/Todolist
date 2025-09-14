<x-app-layout>
    <form method="POST" action="{{ route('task.store') }}">
        @csrf

        <!-- Title -->
        <div>
            <x-input-label for="title" :value="__('title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
