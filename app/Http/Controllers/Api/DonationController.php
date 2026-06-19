<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application\Donation;
use Illuminate\Http\Request;
use App\Models\Application\FoodType;

class DonationController extends Controller
{
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'food_type_id' => 'required',
    //         'name' => 'required',
    //         'phone' => 'required',
    //         'amount' => 'required'
    //     ]);

    //     $donation = Donation::create([
    //         'food_type_id' => $request->food_type_id,
    //         'name' => $request->name,
    //         'phone' => $request->phone,
    //         'amount' => $request->amount,
    //         'payment_status' => 'pending'
    //     ]);

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Donation Created',
    //         'data' => $donation
    //     ]);
    // }

    public function store(Request $request)
    {
        $request->validate([
            'food_type_id' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ]);

        $foodType = FoodType::findOrFail($request->food_type_id);

        $donation = Donation::create([
            'user_id' => $request->user_id,
            'food_type_id' => $request->food_type_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'amount' => $foodType->price,
            'payment_status' => 'pending'
        ]);

        return redirect()
            ->back()
            ->with('success', 'Donation Created Successfully');
    }

    public function index()
    {
        $donations = Donation::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Donation List',
            'data' => $donations
        ]);
    }
}
