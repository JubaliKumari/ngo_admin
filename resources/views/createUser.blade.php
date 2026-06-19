<div class="min-h-screen bg-gray-100 py-10 px-4">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">
                    Create New User
                </h2>
                <p class="text-indigo-100 mt-1">
                    Add a new user to the system
                </p>
            </div>

            <form action="{{ route('admin.users.store') }}" method="POST" class="p-8">
                @csrf

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            placeholder="John Doe"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number
                        </label>
                        <input
                            type="text"
                            name="phone"
                            placeholder="9876543210"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input
                        type="email"
                        name="email"
                        placeholder="user@example.com"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                </div>

                <div class="grid md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <input
                            type="password"
                            name="password"
                            placeholder="********"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Confirm Password
                        </label>
                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="********"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        User Role
                    </label>
                    <select
                        name="role"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                    </select>
                </div>

                <div class="flex justify-end gap-3 mt-8">
                    <button
                        type="reset"
                        class="px-6 py-3 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300">
                        Reset
                    </button>

                    <button
                        type="submit"
                        class="px-6 py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700">
                        Create User
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>