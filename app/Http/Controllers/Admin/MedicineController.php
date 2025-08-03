<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller

{
    // List all medicines
    public function index()
    {
        $medicines = Medicine::all();
        return view('admin.medicine.index', compact('medicines'));
    }

    // Show form to create new medicine
    public function create()
    {
        return view('admin.medicine.create');
    }

    // Store new medicine
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'description'  => 'nullable|string',
            'price'        => 'required|numeric',
            'quantity'     => 'required|integer',
            'manufacturer' => 'nullable|string|max:255',
            'expiry_date'  => 'nullable|date',
            
        ]);

        Medicine::create($request->only([
            'name', 'description', 'price', 'quantity', 'manufacturer', 'expiry_date'
        ]));

        return redirect()->route('admin.medicine.index')
                         ->with('success', 'Medicine added successfully.');
    }

    // Show single medicine details
    public function show(Medicine $medicine)
    {
        return view('admin.medicine.show', compact('medicine'));
    }

    // Show form to edit existing medicine
    public function edit(Medicine $medicine)
    {
        return view('admin.medicine.edit', compact('medicine'));
    }

    // Update medicine details
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'description'  => 'nullable|string',
            'price'        => 'required|numeric',
            'quantity'     => 'required|integer',
            'manufacturer' => 'nullable|string|max:255',
            'expiry_date'  => 'nullable|date',
        ]);

        $medicine->update($request->only([
            'name', 'description', 'price', 'quantity', 'manufacturer', 'expiry_date'
        ]));

        return redirect()->route('admin.medicine.index')
                         ->with('success', 'Medicine updated successfully.');
    }

    // Delete medicine
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();

        return redirect()->route('admin.medicine.index')
                         ->with('success', 'Medicine deleted successfully.');
    }
}
