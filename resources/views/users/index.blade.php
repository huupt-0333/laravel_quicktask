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
                    {{ __("User List") }}
                </div>
            </div>
            <x-primary-button class="mt-4">
                {{ __('Create New User') }}
            </x-primary-button>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">#</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{ __("Name") }}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{ __("Username") }}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{ __("Action") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr class="cursor-pointer" onclick="window.location='{{ route('users.tasks', ['user' => $user]) }}';">
                            <th class="text-gray-900 dark:text-gray-100 text-center" scope="row">{{ $index }}</th>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->fullname }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->username }}</td>
                            <td class="text-gray-900 dark:text-gray-100 text-center">
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                    <x-secondary-button class="mt-4">
                                        {{ __('Edit') }}
                                    </x-secondary-button>
                                </a>
                                <x-danger-button class="mt-4">
                                    {{ __('Delete') }}
                                </x-danger-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
