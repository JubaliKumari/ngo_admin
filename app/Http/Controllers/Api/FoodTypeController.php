<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application\FoodType;

use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    // Get All Food Types
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => FoodType::all()
        ]);
    }

    // Create Food Type
    public function store(Request $request)
    {
        $request->validate([
            'food_name' => 'required',
            'price' => 'required',
        ]);

        $food = FoodType::create([
            'food_name' => $request->food_name,
            'price' => $request->price,
            'details' => $request->details,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Food Type Added',
            'data' => $food
        ]);
    }

    // Get Single Record
    public function show($id)
    {
        $food = FoodType::find($id);

        return response()->json([
            'success' => true,
            'data' => $food
        ]);
    }

    // Update
    public function update(Request $request, $id)
    {
        $food = FoodType::findOrFail($id);

        $food->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Updated Successfully',
            'data' => $food
        ]);
    }

    // Delete
    public function destroy($id)
    {
        FoodType::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Deleted Successfully'
        ]);
    }
}