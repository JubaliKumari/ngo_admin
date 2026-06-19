@extends('layouts.app')

@section('content')

<div class="flex min-h-screen  w-full">

    {{-- Sidebar --}}

    @include('components.sidebar')

    <div class="flex-1 p-6 bg-gray-100 w-full">

        <!-- Header -->


        <div class="bg-white rounded-2xl shadow-sm p-6 w-full">

            <h1 class="text-2xl font-bold mb-6">
                Add Food Type
            </h1>

            <form id="foodTypeForm">

                <div class="mb-4">
                    <label class="block mb-2 font-medium">Food Type</label>
                    <input type="text" name="food_name"
                        class="w-full border rounded-lg p-3">
                </div>

                <div class="mb-4">
                    <label class="block mb-2 font-medium">Price</label>
                    <input type="number" name="price"
                        class="w-full border rounded-lg p-3">
                </div>

                <div class="mb-4">
                    <label class="block mb-2 font-medium">Description</label>
                    <textarea name="details"
                        class="w-full border rounded-lg p-3"
                        rows="4"></textarea>
                </div>

                <button
                    type="submit"
                    class="bg-green-500 text-white px-6 py-3 rounded-lg">
                    Save
                </button>

            </form>

            <div id="message" class="mt-4"></div>

        </div>

    </div>

</div>
<script>
    document.getElementById('foodTypeForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = {
            food_name: document.querySelector('[name="food_name"]').value,
            price: document.querySelector('[name="price"]').value,
            details: document.querySelector('[name="details"]').value
        };

        try {
            const response = await fetch('/api/food-types', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();

            document.getElementById('message').innerHTML =
                '<p class="text-green-600">Food Type Added Successfully!</p>';

            // Clear form
            document.getElementById('foodTypeForm').reset();

        } catch (error) {
            document.getElementById('message').innerHTML =
                '<p class="text-red-600">Something went wrong!</p>';
        }
    });
</script>
@endsection