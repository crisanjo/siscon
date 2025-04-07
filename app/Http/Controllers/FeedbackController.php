<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedbacks.create', ['feedback' => new Feedback]);
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
        Feedback::create($request->all());
           
        return redirect()->route('feedbacks.index')
                         ->with('success', 'Feedback criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        return view('feedbacks.edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'description' => 'required|max:255',
            'user_id' => 'int',
          ]);
        $feedback->update($request->all());
          
        return redirect()->route('feedbacks.index')
                        ->with('success', 'Feedback alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
           
        return redirect()->route('feedbacks.index')
                        ->with('success', 'Feedback deletedo com sucesso');
    }
}
