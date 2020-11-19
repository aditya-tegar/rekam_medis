<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index() {
        $jadwal = Jadwal::all();
        return view('jadwal.index', compact('jadwal'));
    }

    public function create() {
        return view('jadwal.create');
    }

    public function store(Request $request) {
        jadwal::create($request->all());
        return redirect()->route('jadwal.index')->with('status', 'jadwal Stored!!!')->with('success', true);
    }

    public function edit(Jadwal $jadwal) {
        return view('jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, Jadwal $jadwal) {

        
        $jadwal->update($request->all());
        return redirect()->route('jadwal.index')->with('status', 'jadwal updated!!!')->with('success', true);
    }

    public function destroy(Jadwal $jadwal) {
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with('status', 'jadwal deleted!!!')->with('success', true);
    }
}
