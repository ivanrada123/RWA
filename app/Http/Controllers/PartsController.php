<?php

namespace App\Http\Controllers;

use App\Models\Parts;
use Illuminate\Http\Request;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parts = parts::all();
        return view('parts.index',compact('parts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'model_id' => 'required',
        ]);
        
        parts::create($request->post());

        return redirect()->route('parts.index')->with('success','actor has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(parts $parts)
    {
        return view('parts.edit',compact('parts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(parts $parts)
    {
        return view('parts.edit',compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, parts $parts)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'model_id' => 'required',
        ]);
        $parts->update($request->all());

        return redirect()->route('parts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $parts=parts::find($id)->delete();
        return redirect()->route('parts.index')->with('success','actor has been deleted successfully');
    }
}
