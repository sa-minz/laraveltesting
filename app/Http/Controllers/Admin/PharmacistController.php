<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pharmacist;
use App\Models\Medicine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    // List all pharmacists
    public function index()
    {
        $pharmacists = Pharmacist::all();
        return view('admin.pharmacist.index', compact('pharmacists'));
    }

    // Show form to create new pharmacist
    public function create()
    {
        return view('admin.pharmacist.create');
    }

    // Store new pharmacist
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

    // Show single pharmacist details
    public function show(Pharmacist $pharmacist)
    {
        return view('admin.pharmacist.show', compact('pharmacist'));
    }

    // Show form to edit existing pharmacist
    public function edit(Pharmacist $pharmacist)
    {
        $medicines = Medicine::all(); // For possible assignment or view use
        return view('admin.pharmacist.edit', compact('pharmacist', 'medicines'));
    }

    // Update pharmacist details
    public function update(Request $request, Pharmacist $pharmacist)
    {
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

    // Delete pharmacist
    public function destroy(Pharmacist $pharmacist)
    {
        $pharmacist->delete();

        return redirect()->route('admin.pharmacist.index')
                         ->with('success', 'Pharmacist deleted successfully.');
    }
}
