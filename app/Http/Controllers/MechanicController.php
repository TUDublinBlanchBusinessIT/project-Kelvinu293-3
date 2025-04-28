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
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:mechanics,email'
        ]);
        Mechanic::create($request->all());
        return redirect()->route('mechanics.index')->with('success', 'Mechanic added!');
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
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:mechanics,email,' . $mechanic->id
        ]);
        $mechanic->update($request->all());
        return redirect()->route('mechanics.index')->with('success', 'Mechanic updated!');
    }

    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();
        return redirect()->route('mechanics.index')->with('success', 'Mechanic deleted!');
    }
}


