<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Requests\StoreWordRequest;
use App\Http\Requests\UpdateWordRequest;
use App\Http\Resources\WordResource;
use Illuminate\Contracts\Cache\Store;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words = Word::sortable()->paginate(10);
        return view('words', compact('words')); // Corrected line
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addword');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWordRequest $request)
    {
        $word = Word::create($request->validated());
        return redirect()->route('words.index')->with('success', 'Word created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        return view('words.show', compact('word'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        return view('editword', compact('word'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWordRequest $request, Word $word)
    {
        $validated = $request->validated();
        $word->update(['word' => $validated['word']]); // Map 'name' from the request to 'word' in the model

        return redirect()->route('words.index')->with('success', 'Word updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        $word->delete();
        return redirect()->route('words.index')->with('success', 'Word deleted successfully!');
    }
}
