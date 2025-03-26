<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apartments = Apartment::all();
        return view('apartments.index', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apartments.create', ['apartment' => new Apartment]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:255',
            'user_id' => 'int',
          ]);
        Apartment::create($request->all());
           
        return redirect()->route('apartments.index')
                         ->with('success', 'Apartamento criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apartment $apartment)
    {
        return view('apartments.edit', compact('apartment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apartment $apartment)
    {
        $request->validate([
            'description' => 'required|max:255',
            'user_id' => 'int',
          ]);
        $apartment->update($request->all());
          
        return redirect()->route('apartments.index')
                        ->with('success', 'Apartamento alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
           
        return redirect()->route('apartments.index')
                        ->with('success', 'Apartamento deletedo com sucesso');
    }
}
