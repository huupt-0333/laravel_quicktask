<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Task Detail") }}
                </div>
            </div>
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" 
                    type="text" 
                    name="name" 
                    value="{{ $task->name }}" 
                    disabled
                    autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />

                <x-text-input id="description" class="block mt-1 w-full" 
                    type="text" 
                    name="description" 
                    value="{{ $task->description }}" 
                    disabled
                    autocomplete="description" />
            </div>
        </div>
    </div>
</x-app-layout>
