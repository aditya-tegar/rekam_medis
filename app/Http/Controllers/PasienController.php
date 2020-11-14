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
        $validatedData = $request->validate([
            'kode_rekam_medis' => 'required|unique:pasien,kode_rekam_medis',
            // 'body' => 'required',
        ]);
        pasien::create($request->all());
        return redirect()->route('pasien.index')->with('status', 'Pasien Stored!!!')->with('success', true);
    }

    public function edit(Pasien $pasien) {
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien) {

        $validatedData = $request->validate([
            'kode_rekam_medis' => 'required|unique:pasien,kode_rekam_medis',
            // 'body' => 'required',
        ]);
        
        $pasien->update($request->all());
        return redirect()->route('pasien.index')->with('status', 'Pasien updated!!!')->with('success', true);
    }

    public function destroy(Pasien $pasien) {
        // $member = Member::find($id);
        $pasien->delete();
        return redirect()->route('pasien.index')->with('status', 'Pasien deleted!!!')->with('success', true);
    }

    public function laporan(Request $request) {
        $pasien = Pasien::all();
        $tanggal_awal = null;
        $now = \Carbon\Carbon::now();
        if(!empty($request->tanggal_awal)){
            $now = $request->tanggal_awal;
            $tanggal_awal = $request->tanggal_awal;
        }
        $pasien = Pasien::whereDate('created_at', $now)->get();
        return view('laporan.index', compact('pasien', 'tanggal_awal'));
    }
}
