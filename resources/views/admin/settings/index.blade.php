<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">Site Settings</h2>

                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-300 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('settings.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Site Name -->
                        <div class="mb-4">
                            <label for="site_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Site Name</label>
                            <input id="site_name" type="text" name="site_name" value="{{ old('site_name', $settings['site_name']) }}" required class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                            @error('site_name')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Site Email -->
                        <div class="mb-4">
                            <label for="site_email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Site Email</label>
                            <input id="site_email" type="email" name="site_email" value="{{ old('site_email', $settings['site_email']) }}" required class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                            @error('site_email')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Users Per Page -->
                        <div class="mb-4">
                            <label for="users_per_page" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Users Per Page</label>
                            <input id="users_per_page" type="number" name="users_per_page" value="{{ old('users_per_page', $settings['users_per_page']) }}" min="5" max="100" required class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                            @error('users_per_page')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Maintenance Mode -->
                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="maintenance_mode" value="1" {{ old('maintenance_mode', $settings['maintenance_mode']) ? 'checked' : '' }} class="rounded border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Enable Maintenance Mode</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Save Settings
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
