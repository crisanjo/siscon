<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts = Contract::all();
        return view('contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contracts.create', ['contract' => new Contract]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'value' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|afetr_or_equal:start_date',
            'digital_signature' => 'required|string|max:255' ,
            'providers_id' => 'required|integer' ,
            'readjustment monthe' => 'required|string|max:20' ,
          ]);
        Provider::create($request->all());
           
        return redirect()->route('contracts.index')
                         ->with('success', 'Contrato criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contract $contract)
    {
        return view('contracts.edit', compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contract $contract)
    {
            $request->validate([
            'value' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|afetr_or_equal:start_date',
            'digital_signature' => 'required|string|max:255' ,
            'providers_id' => 'required|integer' ,
            'readjustment monthe' => 'required|string|max:20' ,
          ]);
        $contract->update($request->all());
          
        return redirect()->route('contracts.index')
                        ->with('success', 'contrato alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contract $contract)
    {
        $contract->delete();
           
        return redirect()->route('contracts.index')
                        ->with('success', 'Contrato deletedo com sucesso'); 
    }
}
