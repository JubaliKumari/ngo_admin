@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-50">

    {{-- Sidebar --}}
    @include('components.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 p-6">
        <div class="bg-white rounded-xl shadow p-6">
            <h1 class="text-2xl font-bold mb-4">Member Report</h1>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200">

                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Name</th>
                            <th class="p-3 text-left">Phone</th>
                            <th class="p-3 text-left">Amount</th>
                            <th class="p-3 text-left">Purchase Date</th>
                            <th class="p-3 text-left">Expiry Date</th>
                            <th class="p-3 text-left">Payment Status</th>
                            <th class="p-3 text-left">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($memberships as $member)
                        <tr>
                            <td class="p-3">{{ $member->id }}</td>
                            <td class="p-3">{{ $member->name }}</td>
                            <td class="p-3">{{ $member->phone }}</td>
                            <td class="p-3">₹{{ $member->amount }}</td>
                            <td class="p-3">{{ $member->purchase_date }}</td>
                            <td class="p-3">{{ $member->expiry_date }}</td>
                            <td class="p-3">
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded">
                                    {{ $member->payment_status }}
                                </span>
                            </td>
                            <td class="p-3">
                                @if($member->status == 1)
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded">
                                    Active
                                </span>
                                @else
                                <span class="px-2 py-1 bg-red-100 text-red-700 rounded">
                                    Inactive
                                </span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center p-4">
                                No Membership Records Found
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