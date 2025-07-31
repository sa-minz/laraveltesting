<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();
        return view('admin.medicine.index', compact('medicines'));
    }

    public function create()
    {
        return view('admin.medicine.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'manufacturer' => 'nullable|string|max:255',
            'expiry_date' => 'nullable|date',
        ]);

        Medicine::create($request->all());

        return redirect()->route('admin.medicine.index')->with('success', 'Medicine added successfully.');
    }

    public function show(Medicine $medicine)
    {
        return view('admin.medicine.show', compact('medicine'));
    }

    public function edit(Medicine $medicine)
    {
        return view('admin.medicine.edit', compact('medicine'));
    }

    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'manufacturer' => 'nullable|string|max:255',
            'expiry_date' => 'nullable|date',
        ]);

        $medicine->update($request->all());

        return redirect()->route('admin.medicine.index')->with('success', 'Medicine updated successfully.');
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();

        return redirect()->route('admin.medicine.index')->with('success', 'Medicine deleted successfully.');
    }
}
