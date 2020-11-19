<?php

namespace App\Http\Controllers;

use App\Perawat;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    public function index() {
        $perawat = Perawat::all();
        return view('perawat.index', compact('perawat'));
    }

    public function create() {
        return view('perawat.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nip'=>'required|unique:perawat,nip'
        ]);
        perawat::create($request->all());
        return redirect()->route('perawat.index')->with('status', 'perawat Stored!!!')->with('success', true);
    }

    public function edit(Perawat $perawat) {
        return view('perawat.edit', compact('perawat'));
    }

    public function update(Request $request, Perawat $perawat) {

        
        $perawat->update($request->all());
        return redirect()->route('perawat.index')->with('status', 'perawat updated!!!')->with('success', true);
    }

    public function destroy(Perawat $perawat) {
        // $member = Member::find($id);
        $perawat->delete();
        return redirect()->route('perawat.index')->with('status', 'perawat deleted!!!')->with('success', true);
    }
}
