<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufacturer = manufacturer::all();
        return view('manufacturer.index',compact('manufacturer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manufacturer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        manufacturer::create($request->post());

        return redirect()->route('manufacturer.index')->with('success','manufacturer has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Manufacturer $manufacturer)
    {
        return view('manufacturer.edit',compact('manufacturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manufacturer $manufacturer)
    {
        return view('manufacturer.edit',compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $manufacturer->update($request->all());

        return redirect()->route('manufacturer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $manufacturer=manufacturer::find($id)->delete();
        return redirect()->route('manufacturer.index')->with('success','manufacturer has been deleted successfully');
    }
}
