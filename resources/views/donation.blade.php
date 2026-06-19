@extends('layouts.app')

@section('content')

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('components.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 p-6">

        <div class="bg-green-50 min-h-screen  p-6">

            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-3xl font-extrabold text-red-900">
                        🍛 Amma Ki Rasoi
                    </h1>

                    <p class="text-red-900 font-medium">
                        Sponsor One Day Meal Program
                    </p>
                </div>
            </div>



            <!-- Hero Card -->
            <div class="bg-red-900  p-6 mb-8">
                <h2 class="text-3xl font-black text-white mb-2">
                    Donate Food Today
                </h2>

                <p class="text-red-200">
                    Your contribution helps feed people in need.
                </p>
            </div>

            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('donation.store') }}" method="POST">
                @csrf

                <!-- Meal Plans -->
                <h3 class="text-red-900 font-extrabold mb-4">
                    Choose Meal Plan
                </h3>

                <div class="space-y-3">

                    @foreach($foodTypes as $item)

                    <label class="flex items-center justify-between bg-white border-2 border-red-900 rounded-2xl p-4 cursor-pointer hover:shadow-lg transition">

                        <div>
                            <h4 class="font-bold text-red-900">
                                {{ $item->food_name }}
                            </h4>

                            <p class="text-gray-500 text-sm">
                                {{ $item->details }}
                            </p>
                        </div>

                        <div class="flex items-center gap-4">
                            <span class="font-extrabold text-red-900">
                                ₹{{ $item->price }}
                            </span>

                            <input
                                type="radio"
                                name="food_type_id"
                                value="{{ $item->id }}"
                                class="w-5 h-5"
                                required>

                        </div>

                    </label>

                    @endforeach

                </div>

                <!-- User Details -->
                <div class="mt-8">

                    <h3 class="text-red-900 font-extrabold mb-4">
                        Your Details
                    </h3>

                    <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        class="w-full bg-white rounded-xl p-4 mb-4 border border-red-300 focus:outline-none"
                        required>

                    <input
                        type="text"
                        name="phone"
                        placeholder="Mobile Number"
                        class="w-full bg-white rounded-xl p-4 mb-6 border border-red-300 focus:outline-none"
                        required>

                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-red-900 text-white font-extrabold py-4  hover:bg-red-800 transition">
                    💳 PAY NOW
                </button>

            </form>

        </div>

    </div>

</div>

@endsection