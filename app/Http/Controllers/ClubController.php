<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{


    public function index() {
        return Club::all();
    }

    public function show($id) {
        return Club::with('spelers')->findOrFail($id);
    }

    public function store(Request $request) {
        return Club::create($request->all());
    }

    public function update(Request $request, $id) {
        $club = Club::findOrFail($id);
        $club->update($request->all());
        return $club;
    }

    public function destroy($id) {
        Club::destroy($id);
        return response()->noContent();
    }

    public function spelers($id) {
        return Club::findOrFail($id)->spelers;
    }


}
