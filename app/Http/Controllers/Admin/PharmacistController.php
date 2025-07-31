<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pharmacist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PharmacistController extends Controller
{
    public function index()
    {
        $pharmacists = Pharmacist::all();
        return view('admin.pharmacist.index', compact('pharmacists'));
    }

    public function create()
    {
        // Not needed if you're using inline form in index view
        return view('admin.pharmacist.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:pharmacists,email',
            'phone' => 'required',
            'password' => 'required|min:6'
        ]);

        $pharmacist = new Pharmacist();
        $pharmacist->name = $request->name;
        $pharmacist->email = $request->email;
        $pharmacist->phone = $request->phone;
        $pharmacist->password = Hash::make($request->password);
        $pharmacist->save();

        return redirect()->route('admin.pharmacist.index')->with('success', 'Pharmacist added successfully!');
    }

    public function edit($id)
    {
        $pharmacist = Pharmacist::findOrFail($id);
        return view('admin.pharmacist.update', compact('pharmacist'));
    }

    public function update(Request $request, $id)
    {
        $pharmacist = Pharmacist::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:pharmacists,email,' . $pharmacist->id,
            'phone' => 'required'
        ]);

        $pharmacist->name = $request->name;
        $pharmacist->email = $request->email;
        $pharmacist->phone = $request->phone;

        // If password is updated
        if ($request->filled('password')) {
            $pharmacist->password = Hash::make($request->password);
        }

        $pharmacist->save();

        return redirect()->route('admin.pharmacist.index')->with('success', 'Pharmacist updated successfully!');
    }

    public function destroy($id)
    {
        $pharmacist = Pharmacist::findOrFail($id);
        $pharmacist->delete();

        return redirect()->route('admin.pharmacist.index')->with('success', 'Pharmacist deleted successfully!');
    }
}
