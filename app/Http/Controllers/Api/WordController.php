<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWordRequest;
use App\Http\Resources\WordResource;
use App\Models\Word;
use Illuminate\Http\Response;

class WordController extends Controller
{
    public function index()
    {
        return WordResource::collection(Word::all());
    }

    public function store(StoreWordRequest $request)
    {
        $word = Word::create($request->validated());
        return new WordResource($word);
    }

    public function show(Word $word)
    {
        return new WordResource($word);
    }

    public function update(StoreWordRequest $request, Word $word)
    {
        $word->update($request->validated());
        return new WordResource($word);
    }

    public function destroy(Word $word)
    {
        $word->delete();
        return response()->noContent();
    }
}
