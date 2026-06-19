@extends('layouts.app')

@section('content')

<div class="flex min-h-screen">

    @include('components.sidebar')

    <div class="flex-1 p-6 bg-gray-100">

        <div class="bg-white rounded-2xl shadow-sm p-6">

            <h1 class="text-2xl font-bold mb-6">
                Add Membership Type
            </h1>

            <form id="membershipForm">

                <div class="mb-4">
                    <label class="block mb-2">Membership Name</label>

                    <input
                        type="text"
                        id="membership_name"
                        class="w-full border rounded-lg p-3">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Price</label>

                    <input
                        type="number"
                        id="price"
                        class="w-full border rounded-lg p-3">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Duration (Months)</label>

                    <input
                        type="number"
                        id="duration_months"
                        class="w-full border rounded-lg p-3">
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Description</label>

                    <textarea
                        id="details"
                        class="w-full border rounded-lg p-3"></textarea>
                </div>

                <button
                    type="submit"
                    class="bg-green-500 text-white px-6 py-3 rounded-lg">
                    Save
                </button>

            </form>

        </div>

    </div>

</div>

<script>
    document.getElementById('membershipForm').addEventListener('submit', async function(e) {

        e.preventDefault();

        const payload = {
            membership_name: document.getElementById('membership_name').value,
            price: document.getElementById('price').value,
            duration_months: document.getElementById('duration_months').value,
            details: document.getElementById('details').value
        };

        try {

            const response = await fetch('/api/membership-types', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(payload)
            });

            const result = await response.json();

            if (result.success) {
                alert('Membership Type Created Successfully');
                window.location.href = '/membership-types';
            } else {
                alert('Validation Error');
            }

        } catch (error) {
            console.log(error);
        }

    });
</script>

@endsection