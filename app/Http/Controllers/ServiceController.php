<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create', ['service' => new Service]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:255',
          ]);
        Service::create($request->all());
           
        return redirect()->route('services.index')
                         ->with('success', 'Service criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'description' => 'required|max:255',
          ]);
        $service->update($request->all());
          
        return redirect()->route('services.index')
                        ->with('success', 'Service alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
           
        return redirect()->route('services.index')
                        ->with('success', 'Service deletedo com sucesso');
    }
}