<?php

namespace App\Http\Controllers;

use App\models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        if ($cars->count() > 0) {
            return response()->json(
                [
                    'status' => 200,
                    'Cars' => $cars
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'message' => 'Data Tidak ditemukan'
                ],
                404
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand' => 'required|max:225',
            'model' => 'required|max:225',
            'color' => 'required|max:225',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        }

        $car = Car::create([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'color' => $request->input('color'),
            'price' => $request->input('price'),
        ]);

        return response()->json(['message' => 'Car created successfully', 'data' => $car], 200);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Cars = Car::find($id);
        if ($Cars) {
            return response()->json(
                [
                    'status' => 200,
                    'Car' => $Cars
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => 404,
                    'message' => "Data tidak ditemukan"
                ],
                404
            );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'brand' => 'required|max:225',
            'model' => 'required|max:225',
            'color' => 'required|max:225',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        }

        // Find the car by ID
        $car = Car::find($id);

        // Check if the car with the given ID exists
        if (!$car) {
            return response()->json([
                'status' => 404,
                'message' => 'Car not found',
            ], 404);
        }

        // Update the car with the new data
        $car->update([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'color' => $request->input('color'),
            'price' => $request->input('price'),
        ]);

        // Return a response indicating the successful update
        return response()->json([
            'status' => 200,
            'message' => 'Car updated successfully',
            'data' => $car,
        ], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Cars = Car::find($id);
        if ($Cars) {
            $Cars->delete();

            return response()->json([
                'status' => 404,
                'message' => "Data berhasil dihapus"
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Data tidak ada",
            ], 404);
        }
    }
}
