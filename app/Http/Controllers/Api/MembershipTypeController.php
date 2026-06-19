<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\Models\Application\MembershipType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembershipTypeController extends Controller
{
    public function index()
    {
        $memberships = MembershipType::latest()->get();

        return response()->json([
            'success' => true,
            'data' => $memberships
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'membership_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_months' => 'required|integer',
            'details' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $membership = MembershipType::create([
            'membership_name' => $request->membership_name,
            'price' => $request->price,
            'duration_months' => $request->duration_months,
            'details' => $request->details,
            'status' => 1
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Membership Type Created Successfully',
            'data' => $membership
        ]);
    }

    public function show($id)
    {
        $membership = MembershipType::find($id);

        if (!$membership) {
            return response()->json([
                'success' => false,
                'message' => 'Membership Type Not Found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $membership
        ]);
    }

    public function update(Request $request, $id)
    {
        $membership = MembershipType::find($id);

        if (!$membership) {
            return response()->json([
                'success' => false,
                'message' => 'Membership Type Not Found'
            ], 404);
        }

        $membership->update([
            'membership_name' => $request->membership_name,
            'price' => $request->price,
            'duration_months' => $request->duration_months,
            'details' => $request->details
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Membership Type Updated Successfully',
            'data' => $membership
        ]);
    }

    public function destroy($id)
    {
        $membership = MembershipType::find($id);

        if (!$membership) {
            return response()->json([
                'success' => false,
                'message' => 'Membership Type Not Found'
            ], 404);
        }

        $membership->delete();

        return response()->json([
            'success' => true,
            'message' => 'Membership Type Deleted Successfully'
        ]);
    }
}
