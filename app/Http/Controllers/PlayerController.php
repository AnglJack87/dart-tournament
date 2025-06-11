<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Tournament;

class PlayerController extends Controller
{
    public function create($tournamentId)
    {
        $tournament = Tournament::findOrFail($tournamentId);
        return view('players.create', compact('tournament'));
    }

    public function store(Request $request, $tournamentId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Player::create([
            'name' => $request->name,
            'tournament_id' => $tournamentId,
        ]);

        return redirect()->route('tournament.players', $tournamentId)
                         ->with('success', 'Spieler hinzugefügt!');
    }

    public function index($tournamentId)
    {
        $tournament = Tournament::findOrFail($tournamentId);
        $players = $tournament->players;

        return view('players.index', compact('tournament', 'players'));
    }
}
