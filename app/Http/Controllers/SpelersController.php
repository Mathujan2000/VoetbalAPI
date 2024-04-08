<?php

namespace App\Http\Controllers;

use App\Models\Speler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Import the Log facade
use Illuminate\Support\Facades\Validator; // Import the Validator facade for validation

class SpelersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        Log::info('Spelers index opgevraagd', [
            'ip' => $request->ip(),
            'data' => $request->all()
        ]);


        if ($request->has('naam')) {
            return response()->json([
                'success' => true,
                'data' => Speler::where('naam', 'like', '%' . $request->naam . '%')->get(),
            ], 200);
        } else {
            return response()->json([
                'success' => true,
                'data' => Speler::all(),
            ], 200);
        }
    }

    public function store(Request $request)
    {
        Log::info('Speler toevoegen', [
            'ip' => $request->ip(),
            'data' => $request->all(),
        ]);

        $validator = Validator::make($request->all(), [
            'naam' => 'required',


        ]);

        if ($validator->fails()) {
            Log::error("Speler toevoegen fout", ['errors' => $validator->errors()]);
            return response()->json([
                'success' => false,
                'foutmelding' => 'Data niet correct',
                'errors' => $validator->errors(),
            ], 400);
        }

        $speler = Speler::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $speler,
        ], 201);
    }


    public function show(Speler $speler)
    {
        return response()->json([
            'success' => true,
            'data' => $speler,
        ], 200);
    }


    public function update(Request $request, Speler $speler)
    {
        Log::info('Speler bijwerken', [
            'ip' => $request->ip(),
            'spelerId' => $speler->id,
            'data' => $request->all(),
        ]);

        $speler->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $speler,
        ], 200);
    }


    public function destroy(Speler $speler)
    {
        Log::info('Speler verwijderen', [
            'spelerId' => $speler->id
        ]);

        $speler->delete();

        return response()->json([
            'success' => true,
            'message' => 'Speler verwijderd',
        ], 200);
    }
}
