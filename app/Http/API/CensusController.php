<?php
namespace App\Http\Controllers\API;

use App\Census;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CensusController extends Controller {
    public function store(Request $request)
    {
        $input = $request->all();

        $census = Census::create($input);

        if (! $census) {
            return response()->json('failed', 400);
        }

        return response()->json($census, 201);
    }
}