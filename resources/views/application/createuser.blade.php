@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto py-8">

```
<div class="bg-white rounded-3xl shadow-xl overflow-hidden">

    <div class="bg-gradient-to-r from-green-600 to-green-800 p-6">
        <h2 class="text-3xl font-bold text-white">
            Create User
        </h2>
        <p class="text-green-100">
            Add a new admin or staff member
        </p>
    </div>

    <form action="{{ route('users.store') }}" method="POST" class="p-8">
        @csrf

        <div class="grid md:grid-cols-2 gap-6">

            <!-- Name -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Full Name
                </label>

                <input
                    type="text"
                    name="name"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500"
                    placeholder="Enter full name">
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Phone Number
                </label>

                <input
                    type="text"
                    name="phone"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500"
                    placeholder="Enter phone number">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500"
                    placeholder="Enter email">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500"
                    placeholder="Enter password">
            </div>

        </div>

        <div class="mt-8 flex gap-4">

            <button
                type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl font-semibold">
                Save User
            </button>

            <a href="{{ url()->previous() }}"
               class="bg-gray-200 hover:bg-gray-300 px-8 py-3 rounded-xl font-semibold">
                Cancel
            </a>

        </div>

    </form>

</div>
```

</div>

@endsection
