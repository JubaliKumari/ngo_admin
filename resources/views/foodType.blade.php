@extends('layouts.app')

@section('content')

<div class="flex min-h-screen">

    @include('components.sidebar')

    <div class="flex-1 bg-gray-100 p-6">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Food Types Master
                </h1>

                <p class="text-gray-500">
                    Manage meal plans and pricing
                </p>
            </div>

            <a href="{{ route('food-types.create') }}"
                class="bg-green-500 hover:bg-green-600 text-white px-5 py-3 rounded-xl font-semibold inline-block">
                + Add Food Type
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

            <div class="px-6 py-4 border-b">
                <h2 class="text-lg font-bold text-gray-700">
                    Food Types List
                </h2>
            </div>

            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead class="bg-gray-50">
                        <tr>
                            <th class="text-left px-6 py-4 font-semibold text-gray-600">
                                Food Type
                            </th>

                            <th class="text-left px-6 py-4 font-semibold text-gray-600">
                                Price
                            </th>

                            <th class="text-left px-6 py-4 font-semibold text-gray-600">
                                Description
                            </th>

                            <th class="text-center px-6 py-4 font-semibold text-gray-600">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody id="foodTypeTable">

                        <tr>
                            <td colspan="4" class="text-center py-4">
                                Loading...
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        fetch('/api/food-types')
            .then(response => response.json())
            .then(data => {

                let rows = '';

                if (data.length === 0) {
                    rows = `
                    <tr>
                        <td colspan="4" class="text-center py-4">
                            No Food Types Found
                        </td>
                    </tr>
                `;
                } else {

                    data.data.forEach(food => {

                        rows += `
                        <tr class="border-t hover:bg-gray-50">

                            <td class="px-6 py-4 font-semibold">
                                ${food.food_name}
                            </td>

                            <td class="px-6 py-4">
                                ₹${food.price}
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                ${food.details ?? ''}
                            </td>

                            <td class="px-6 py-4 text-center">

                                <a href="/food-types/${food.id}/edit"
                                    class="bg-blue-500 text-white px-3 py-1 rounded-lg mr-2">
                                    Edit
                                </a>

                                <button
                                    onclick="deleteFoodType(${food.id})"
                                    class="bg-red-500 text-white px-3 py-1 rounded-lg">
                                    Delete
                                </button>

                            </td>

                        </tr>
                    `;
                    });
                }

                document.getElementById('foodTypeTable').innerHTML = rows;
            })
            .catch(error => {

                document.getElementById('foodTypeTable').innerHTML = `
                <tr>
                    <td colspan="4" class="text-center text-red-500 py-4">
                        Failed to load data
                    </td>
                </tr>
            `;

                console.error(error);
            });

    });

    function deleteFoodType(id) {
        if (confirm('Are you sure you want to delete this food type?')) {

            fetch(`/api/food-types/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(() => {
                    location.reload();
                });
        }
    }
</script>

@endsection