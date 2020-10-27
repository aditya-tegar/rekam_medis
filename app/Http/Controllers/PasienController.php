<?php

namespace App\Http\Controllers;

use App\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index() {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }

    public function create() {
        return view('pasien.create');
    }

    public function store(Request $request) {
        pasien::create($request->all());
        return redirect()->route('pasien.index')->with('status', 'Pasien Stored!!!')->with('success', true);
    }

    public function edit(Pasien $pasien) {
        return view('pasien.edit', compact('pasien', 'status'));
    }

    public function update(Request $request, Pasien $pasien) {

        $pasien->update($request->all());
        return redirect()->route('pasien.index')->with('status', 'Pasien updated!!!')->with('success', true);
    }

    public function destroy(Pasien $pasien) {
        // $member = Member::find($id);
        $pasien->delete();
        return redirect()->route('pasien.index')->with('status', 'Pasien deleted!!!')->with('success', true);
    }
}
