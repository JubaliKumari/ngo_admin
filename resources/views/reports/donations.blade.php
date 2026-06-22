@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-50">

    {{-- Sidebar --}}
    @include('components.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 p-6">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">
                Donation Report
            </h1>
        </div>

        {{-- Summary Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

            <div class="bg-white rounded-2xl shadow-sm p-6 border">
                <p class="text-gray-500 text-sm">Total Donations</p>
                <h2 class="text-3xl font-bold text-green-600 mt-2">
                    {{ $donations->count() }}
                </h2>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 border">
                <p class="text-gray-500 text-sm">Total Amount</p>
                <h2 class="text-3xl font-bold text-blue-600 mt-2">
                    ₹{{ number_format($donations->sum('amount'), 2) }}
                </h2>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 border">
                <p class="text-gray-500 text-sm">Today's Donations</p>
                <h2 class="text-3xl font-bold text-purple-600 mt-2">
                    {{ $donations->filter(fn($d) => \Carbon\Carbon::parse($d->created_at)->isToday())->count() }}
                </h2>
            </div>

        </div>

        {{-- Donation Table --}}
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

            <div class="p-5 border-b">
                <h2 class="font-semibold text-lg">
                    Donation Records
                </h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-5 py-4 text-left">ID</th>
                            <th class="px-5 py-4 text-left">Donor Name</th>
                            <th class="px-5 py-4 text-left">Amount</th>
                            <th class="px-5 py-4 text-left">Date</th>
                            <th class="px-5 py-4 text-left">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($donations as $donation)

                        @php
                        $date = \Carbon\Carbon::parse($donation->created_at);
                        @endphp

                        <tr class="border-b hover:bg-gray-50">

                            <td class="px-5 py-4">
                                {{ $donation->id }}
                            </td>

                            <td class="px-5 py-4 font-medium">
                                {{ $donation->name ?? 'N/A' }}
                            </td>

                            <td class="px-5 py-4">
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700">
                                    ₹{{ $donation->amount ?? 0 }}
                                </span>
                            </td>

                            <td class="px-5 py-4 text-gray-600">
                                {{ $date->format('d M Y') }}
                            </td>

                            <td class="px-5 py-4">

                                @if($date->isToday())
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm">
                                    Today
                                </span>

                                @elseif($date->isYesterday())
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-sm">
                                    Yesterday
                                </span>

                                @else
                                <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-sm">
                                    {{ $date->diffForHumans() }}
                                </span>
                                @endif

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="5" class="text-center py-10 text-gray-500">
                                No Donations Found
                            </td>
                        </tr>

                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>
@endsection