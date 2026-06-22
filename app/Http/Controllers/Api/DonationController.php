<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application\Donation;
use App\Models\Application\FoodType;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'food_type_id' => 'required|integer|exists:food_types,id',
                'name'         => 'required|string|max:255',
                'phone'        => 'required|string|max:20',
            ]);

            // Get authenticated user with correct guard
            $user = $request->user('create_user_api');

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthorized'
                ], 401);
            }

            $foodType = \App\Models\Application\FoodType::findOrFail($request->food_type_id);

            $donation = \App\Models\Application\Donation::create([
                'user_id'        => $user->id,
                'food_type_id'   => $request->food_type_id,
                'name'           => $request->name,
                'phone'          => $request->phone,
                'amount'         => $foodType->price ?? 0,
                'payment_status' => 'pending'
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Donation Created Successfully',
                'data'    => $donation
            ], 201);
        } catch (\Exception $e) {
            // This will help us see the real error instead of ECONNRESET
            return response()->json([
                'success' => false,
                'message' => 'Server Error',
                'error'   => $e->getMessage(),
                'line'    => $e->getLine()
            ], 500);
        }
    }

    public function index()
    {
        $donations = Donation::all();

        return response()->json([
            'success' => true,
            'data' => $donations
        ]);
    }
}
