<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Protocol;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visits = Visit::with('protocol')->get();
        return view('visits.index', compact('visits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $protocols = Protocol::all();
        return view('visits.create', ['visit' => new Visit, 'protocols' => $protocols]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description'=> 'required|max:255',
            'protocol_id' => 'required|integer' ,
          ]);

        Visit::create($request->all());
           
        return redirect()->route('visits.index')
                         ->with('success', 'Visita criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visits $visits)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visits $visits)
    {
        $protocols = Protocol::all();
        return view('visits.edit', ['visit' => $visit, 'protocols' => $protocols]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visits $visits)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description'=> 'required|max:255',
            'protocol_id' => 'required|integer' ,
             
        ]);
        $visit->update($request->all());
          
        return redirect()->route('visits.index')
                        ->with('success', 'Visita alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visits $visits)
    {
        $visit->delete();
           
        return redirect()->route('visits.index')
                        ->with('success', 'Visita deletedo com sucesso');
    }
}
