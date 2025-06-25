<?php

namespace App\Http\Controllers;

use App\Models\readjustment;
use Illuminate\Http\Request;

class ReadjustmentController extends Controllers
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $readjustments = Readjustment::all();
        return view('readjustments.index', compact('readjustments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('readjustments.create', ['readjustment' => new Readjustment]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'readjustment' =>'required|integer' ,
            'contract_id' => 'required|integer' ,
         ]);
        Readjustment::create($request->all());
           
        return redirect()->route('readjustments.index')
                         ->with('success', 'Reajuste criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(readjustment $readjustment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(readjustment $readjustment)
    {
        return view('readjustments.edit', compact('readjustment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, readjustment $readjustment)
    {
            $request->validate([
               'readjustment' =>'required|integer' ,
               'contract_id' => 'required|integer' , 
            ]);
            $readjustment->update($request->all());
          
        return redirect()->route('readjustments.index')
                        ->with('success', 'Reajuste alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(readjustment $readjustment)
    {
        $readjustment->delete();
           
        return redirect()->route('readjustments.index')
                        ->with('success', 'Reajuste deletedo com sucesso');
    }
}
