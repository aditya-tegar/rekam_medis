<?php

namespace App\Http\Controllers;

use App\Dokter;
use App\Pasien;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index() {
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter'));
    }

    public function create() {
        return view('dokter.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nip'=>'required|unique:dokter,nip'
        ]);
        dokter::create($request->all());
        return redirect()->route('dokter.index')->with('status', 'Dokter Stored!!!')->with('success', true);
    }

    public function edit(Dokter $dokter) {
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, Dokter $dokter) {

        
        $dokter->update($request->all());
        return redirect()->route('dokter.index')->with('status', 'Dokter updated!!!')->with('success', true);
    }

    public function destroy(Dokter $dokter) {
        // $member = Member::find($id);
        $dokter->delete();
        return redirect()->route('dokter.index')->with('status', 'Dokter deleted!!!')->with('success', true);
    }
}
