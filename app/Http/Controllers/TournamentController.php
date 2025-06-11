<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        return view('tournaments.index', compact('tournaments'));
    }

    public function create()
    {
        return view('tournaments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
        ]);

        Tournament::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'has_group_stage' => $request->has('has_group_stage'),
        ]);

        return redirect('/tournaments')->with('success', 'Turnier erfolgreich erstellt!');
    }
}
