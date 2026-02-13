<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-300 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">My Profile</h2>
                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Edit Profile
                        </a>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Name</label>
                            <p class="mt-1 text-lg text-gray-900 dark:text-gray-100">{{ $user->name }}</p>
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Email</label>
                            <p class="mt-1 text-lg text-gray-900 dark:text-gray-100">{{ $user->email }}</p>
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Role</label>
                            <p class="mt-1">
                                @if($user->is_admin)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                        Admin
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                        User
                                    </span>
                                @endif
                            </p>
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Member Since</label>
                            <p class="mt-1 text-lg text-gray-900 dark:text-gray-100">{{ $user->created_at->format('F d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
