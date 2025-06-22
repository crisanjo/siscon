<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
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
            'name' => 'required|max:255',
            'phone' => 'required|max:20',
            'whatsapp' => 'required|max:20',
            'profile_id' => 'required|integer',
          ]);
        User::create($request->all());
           
        return redirect()->route('users.index')
                         ->with('success', 'Usuário criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:20',
            'whatsapp' => 'required|max:20',
            'profile_id' => 'required|integer',
          ]);
        $user->update($request->all());
          
        return redirect()->route('users.index')
                        ->with('success', 'Usuário alterado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
           
        return redirect()->route('users.index')
                        ->with('success', 'Usuário deletedo com sucesso');
    }
}