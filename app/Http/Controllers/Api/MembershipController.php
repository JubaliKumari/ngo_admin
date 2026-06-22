<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application\Membership;
use App\Models\Application\MembershipType;
use Illuminate\Support\Facades\Validator;

class MembershipController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'membership_type_id' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $membershipType = MembershipType::findOrFail(
            $request->membership_type_id
        );

        $purchaseDate = Carbon::today();

        $expiryDate = Carbon::today()
            ->addMonths($membershipType->duration_months);

        $membership = Membership::create([
            'user_id' => $request->user_id,
            'membership_type_id' => $request->membership_type_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'amount' => $membershipType->price,
            'purchase_date' => $purchaseDate,
            'expiry_date' => $expiryDate,
            'payment_status' => 'paid',
            'status' => 1
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Membership Created Successfully',
            'data' => $membership
        ]);
    }

    public function index()
    {
        $memberships = Membership::latest()->get();

        return response()->json([
            'success' => true,
            'data' => $memberships
        ]);
    }

    public function show($id)
    {
        $membership = Membership::where('user_id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $membership
        ]);
    }
}
