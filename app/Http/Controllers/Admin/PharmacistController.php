<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pharmacist;
use App\Models\Medicine;  // <--- Add this import
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    // Display list of all pharmacists
    public function index()
    {
        $pharmacists = Pharmacist::all();
        return view('admin.pharmacist.index', compact('pharmacists'));
    }

    // Show form to create a new pharmacist
    public function create()
    {
        return view('admin.pharmacist.create');
    }

    // Store new pharmacist in database
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|unique:pharmacists,email',
            'phone'          => 'required|string|max:20',
            'license_number' => 'required|string|max:255|unique:pharmacists,license_number',
            'pharmacy_name'  => 'required|string|max:255',
        ]);

        Pharmacist::create($request->only([
            'name', 'email', 'phone', 'license_number', 'pharmacy_name'
        ]));

        return redirect()->route('admin.pharmacist.index')
                         ->with('success', 'Pharmacist added successfully.');
    }

    // Show form to edit an existing pharmacist
    public function edit($id)
    {
        $pharmacist = Pharmacist::findOrFail($id);
        $medicines = Medicine::all();  // <-- Add this line to get medicines
        return view('admin.pharmacist.edit', compact('pharmacist', 'medicines'));
    }

    // Update pharmacist details in database
    public function update(Request $request, $id)
    {
        $pharmacist = Pharmacist::findOrFail($id);

        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|unique:pharmacists,email,' . $pharmacist->id,
            'phone'          => 'required|string|max:20',
            'license_number' => 'required|string|max:255|unique:pharmacists,license_number,' . $pharmacist->id,
            'pharmacy_name'  => 'required|string|max:255',
        ]);

        $pharmacist->update($request->only([
            'name', 'email', 'phone', 'license_number', 'pharmacy_name'
        ]));

        return redirect()->route('admin.pharmacist.index')
                         ->with('success', 'Pharmacist updated successfully.');
    }

    // Show details of a single pharmacist
    public function show($id)
    {
        $pharmacist = Pharmacist::findOrFail($id);
        return view('admin.pharmacist.show', compact('pharmacist'));
    }

    // Delete pharmacist from database
    public function destroy($id)
    {
        $pharmacist = Pharmacist::findOrFail($id);
        $pharmacist->delete();

        return redirect()->route('admin.pharmacist.index')
                         ->with('success', 'Pharmacist deleted successfully.');
    }
}
