<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function index()
    {
        $mechanics = Mechanic::all();
        return view('mechanics.index', compact('mechanics'));
    }

    public function create()
    {
        return view('mechanics.new');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:mechanics,email',
        ]);

        Mechanic::create($validated);

        return redirect()->route('mechanics.index')->with('success', 'Mechanic created successfully.');
    }

    public function show(Mechanic $mechanic)
    {
        return view('mechanics.show', compact('mechanic'));
    }

    public function edit(Mechanic $mechanic)
    {
        return view('mechanics.edit', compact('mechanic'));
    }

    public function update(Request $request, Mechanic $mechanic)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:mechanics,email,' . $mechanic->id,
        ]);

        $mechanic->update($validated);

        return redirect()->route('mechanics.index')->with('success', 'Mechanic updated successfully.');
    }

    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();

        return redirect()->route('mechanics.index')->with('success', 'Mechanic deleted successfully.');
    }
}
