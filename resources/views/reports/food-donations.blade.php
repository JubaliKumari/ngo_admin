@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-50">

    @include('components.sidebar')

    <div class="flex-1 p-6">
        <div class="bg-white rounded-xl shadow p-6">
            <h1 class="text-2xl font-bold mb-4">Food Donation Report</h1>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Food Type</th>
                            <th class="p-3 text-left">Quantity</th>
                            <th class="p-3 text-left">Donor</th>
                            <th class="p-3 text-left">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3">1</td>
                            <td class="p-3">Rice</td>
                            <td class="p-3">50 Kg</td>
                            <td class="p-3">Amit Kumar</td>
                            <td class="p-3">22 Jun 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection