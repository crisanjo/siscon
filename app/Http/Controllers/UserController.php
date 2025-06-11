<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    $users = User::all();
        return view('users.index', compact('users'));
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create', ['user' => new User]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:255',
          ]);
        User::create($request->all());
           
        return redirect()->route('users.index')
                         ->with('success', 'Usuário criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        $request->validate([
            'description' => 'required|max:255',
          ]);
        $user->update($request->all());
          
        return redirect()->route('users.index')
                        ->with('success', 'Usuário alterado com sucesso');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        $user->delete();
           
        return redirect()->route('users.index')
                        ->with('success', 'Usuário deletedo com sucesso');
    }
}
