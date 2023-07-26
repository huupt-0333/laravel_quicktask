<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("User Detail") }}
                </div>
            </div>
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" 
                    type="text" 
                    name="name" 
                    value="{{ $user->username }}" 
                    disabled 
                    autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-input-label for="first-name" :value="__('First Name')" />

                <x-text-input id="first-name" class="block mt-1 w-full" 
                    type="text" 
                    name="first_name" 
                    value="{{ $user->first_name }}" 
                    disabled 
                    autocomplete="first_name" />
            </div>
            <div class="mt-4">
                <x-input-label for="last-name" :value="__('Last Name')" />

                <x-text-input id="first-name" class="block mt-1 w-full" 
                    type="text" 
                    name="last_name" 
                    value="{{ $user->last_name }}" 
                    disabled 
                    autocomplete="last_name" />
            </div>
        </div>
    </div>
</x-app-layout>
