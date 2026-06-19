@extends('layouts.app')

@section('content')

<div class="flex min-h-screen">

    @include('components.sidebar')

    <div class="flex-1 bg-gray-100 p-6">

        <div class="flex justify-between mb-6">

            <h1 class="text-3xl font-bold">
                Membership Types
            </h1>

            <a href="{{ route('membership-types.create') }}"
                class="bg-green-500 text-white px-4 py-2 rounded">
                Add Membership
            </a>

        </div>

        <div class="bg-white rounded-xl shadow overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-100">

                    <tr>
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Price</th>
                        <th class="p-4 text-left">Duration</th>
                        <th class="p-4 text-left">Description</th>
                    </tr>

                </thead>

                <tbody id="membershipTable">

                </tbody>

            </table>

        </div>

    </div>

</div>

<script>
    fetch('/api/membership-types')
        .then(response => response.json())
        .then(result => {

            let rows = '';

            result.data.forEach(item => {

                rows += `
            <tr class="border-t">

                <td class="p-4">${item.membership_name}</td>

                <td class="p-4">₹${item.price}</td>

                <td class="p-4">${item.duration_months} Months</td>

                <td class="p-4">${item.details ?? ''}</td>

            </tr>
        `;
            });

            document.getElementById('membershipTable').innerHTML = rows;

        });
</script>

@endsection