<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeamsController extends Controller
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
                'data' => Team::where('naam', 'like', '%' . $request->naam . '%')->get(),
            ], 200);
        } else {
            return response()->json([
                'success' => true,
                'data' => Team::all(),
            ], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $teams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $teams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $teams)
    {
        //
    }
}
