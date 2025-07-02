<?php

namespace App\Http\Controllers;

use App\Models\Protocol;
use Illuminate\Http\Request;

class ProtocolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $protocols = Protocol::all();
        return view('protocols.index', compact('protocols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('protocols.create', ['protocol' => new Protocol]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:255',
            'solution' => 'required|max:200',
            'opening_date' => 'required',
            'value' => 'required',
            'paid' => 'required',
            'user_id' => 'required',
            'area_id' => 'required',
            'status_id' => 'required',
            'type_id' => 'required',
            'priority' => 'required|max:200',
          ]);
        Protocol::create($request->all());
           
        return redirect()->route('protocols.index')
                         ->with('success', 'Protocolo criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Protocol $protocol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Protocol $protocol)
    {
        return view('protocols.edit', compact('protocol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Protocol $protocol)
    {
        $request->validate([
            'description' => 'required|max:255',
            'solution' => 'required|max:200',
            'opening_date' => 'required|date',
            'value' => 'required',
            'paid' => 'required',
            'user_id' => 'required|',
            'area_id' => 'required|integer',
            'status_id' => 'required|integer',
            'type_id' => 'required|integer',
            'priority' => 'required|max:200',
          ]);
        $protocol->update($request->all());
          
        return redirect()->route('protocols.index')
                        ->with('success', 'Protocolo alterado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Protocol $protocol)
    {
        $protocol->delete();
           
        return redirect()->route('protocols.index')
                        ->with('success', 'Protocolo deletedo com sucesso');
    }
}
