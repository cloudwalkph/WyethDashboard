<?php
namespace App\Http\Controllers\API;

use App\Census;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CensusController extends Controller {
    public function store(Request $request)
    {
        $input = $request->all();

        $duplicate = Census::where('name', $input['name'])
            ->where('email', $input['email'])
            ->first();

        // Check for duplicate
        if ($duplicate) {
            return response()->json('duplicate', 400);
        }

        $census = Census::create($input);

        // Failed to create data
        if (! $census) {
            return response()->json('failed', 400);
        }

        return response()->json($census, 201);
    }
}