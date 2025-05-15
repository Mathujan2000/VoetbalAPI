<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speler;

class SpelerController extends Controller
{

    public function index() {
        return Speler::with('club')->get();
    }

    public function show($id) {
        return Speler::with('club')->findOrFail($id);
    }

    public function store(Request $request) {
        return Speler::create($request->all());
    }

    public function update(Request $request, $id) {
        $speler = Speler::findOrFail($id);
        $speler->update($request->all());
        return $speler;
    }

    public function destroy($id) {
        Speler::destroy($id);
        return response()->noContent();
    }

}
