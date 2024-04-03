<?php

namespace App\Http\Controllers;

use App\Models\Speler;
use Illuminate\Http\Request;

class SpelersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Speler::all();
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
    public function show(Speler $speler)
    {
        return $speler;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speler $speler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speler $speler)
    {
        $speler->delete();
    }
}
