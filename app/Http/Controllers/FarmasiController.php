<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmasi;

class FarmasiController extends Controller
{
    public function index() {
        $farmasi = Farmasi::all();
        return view('farmasi.index', compact('farmasi'));
    }

    public function create() {
        return view('farmasi.create');
    }

    public function store(Request $request) {
        $request->validate([
            'no_reg'=>'required|unique:farmasi,no_reg'
        ]);
        farmasi::create($request->all());
        return redirect()->route('farmasi.index')->with('status', 'Farmasi Stored!!!')->with('success', true);
    }

    public function edit(Farmasi $farmasi) {
        return view('farmasi.edit', compact('farmasi'));
    }

    public function update(Request $request, Farmasi $farmasi) {

        
        $farmasi->update($request->all());
        return redirect()->route('farmasi.index')->with('status', 'Farmasi updated!!!')->with('success', true);
    }

    public function destroy(Farmasi $farmasi) {
        // $member = Member::find($id);
        $farmasi->delete();
        return redirect()->route('farmasi.index')->with('status', 'Farmasi deleted!!!')->with('success', true);
    }
}
