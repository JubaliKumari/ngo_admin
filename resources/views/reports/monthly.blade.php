@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-50">

    {{-- Sidebar --}}
    @include('components.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 p-6">

        <h1 class="text-2xl font-bold mb-6">Monthly Report</h1>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

            <div class="bg-white rounded-xl shadow p-5">
                <h3 class="text-gray-500">Total Donations</h3>
                <p class="text-3xl font-bold text-green-600">₹50,000</p>
            </div>

            <div class="bg-white rounded-xl shadow p-5">
                <h3 class="text-gray-500">Food Donations</h3>
                <p class="text-3xl font-bold text-blue-600">120</p>
            </div>

            <div class="bg-white rounded-xl shadow p-5">
                <h3 class="text-gray-500">Members</h3>
                <p class="text-3xl font-bold text-purple-600">45</p>
            </div>

            <div class="bg-white rounded-xl shadow p-5">
                <h3 class="text-gray-500">New Donations</h3>
                <p class="text-3xl font-bold text-orange-600">18</p>
            </div>

        </div>

        <div class="bg-white rounded-xl shadow p-6 mt-6">
            <h2 class="text-lg font-semibold mb-4">Monthly Summary</h2>

            <table class="w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Month</th>
                        <th class="p-3 text-left">Donations</th>
                        <th class="p-3 text-left">Food Donations</th>
                        <th class="p-3 text-left">Members Added</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-3">June 2026</td>
                        <td class="p-3">₹50,000</td>
                        <td class="p-3">120</td>
                        <td class="p-3">15</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection