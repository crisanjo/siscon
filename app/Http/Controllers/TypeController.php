<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('types.create', ['type' => new Type]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:255',
          ]);
        Type::create($request->all());
           
        return redirect()->route('types.index')
                         ->with('success', 'Tipo criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'description' => 'required|max:255',
          ]);
        $type->update($request->all());
          
        return redirect()->route('types.index')
                        ->with('success', 'Tipo alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
           
        return redirect()->route('types.index')
                        ->with('success', 'Tipo deletedo com sucesso');
    }
}
