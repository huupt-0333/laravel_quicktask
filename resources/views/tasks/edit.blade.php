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
                    {{ __("Task Edit") }}
                </div>
            </div>
            <form action="{{ route('tasks.update', ['task' => $task]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')" />

                    <x-text-input id="name" class="block mt-1 w-full" 
                        type="text" 
                        name="name" 
                        value="{{ $task->name }}" 
                        required 
                        autocomplete="name" />

                    <x-input-error :messages="$errors->get('name')" class="mt-2" /> 
                </div>
                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')" />

                    <x-text-input id="description" class="block mt-1 w-full" 
                        type="text" 
                        name="description" 
                        value="{{ $task->description }}" 
                        required 
                        autocomplete="description" />

                    <x-input-error :messages="$errors->get('description')" class="mt-2" /> 
                </div>
                <x-primary-button class="mt-4">
                    {{ __('Edit') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
