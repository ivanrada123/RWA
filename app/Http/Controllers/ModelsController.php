<?php

namespace App\Http\Controllers;

use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = models::all();
        return view('models.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('models.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer_id' => 'required',
        ]);
        
        models::create($request->post());

        return redirect()->route('models.index')->with('success','models has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(models $models)
    {
        return view('models.edit',compact('models'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(models $models)
    {
        return view('models.edit',compact('models'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, models $models)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer_id' => 'required',
        ]);
        $models->update($request->all());

        return redirect()->route('models.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $models=models::find($id)->delete();
        return redirect()->route('models.index')->with('success','models has been deleted successfully');
    }
}
