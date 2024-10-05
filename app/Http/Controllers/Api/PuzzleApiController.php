<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePuzzleRequest;
use App\Http\Resources\PuzzleResource;
use App\Models\Puzzle;
use Illuminate\Http\Response;

class PuzzleApiController extends Controller
{
    public function index()
    {
        return PuzzleResource::collection(Puzzle::with('category')->get());
    }

    public function store(StorePuzzleRequest $request)
    {
        $puzzle = Puzzle::create($request->validated());
        return new PuzzleResource($puzzle);
    }

    public function show(Puzzle $puzzle)
    {
        return new PuzzleResource($puzzle->load('category'));
    }

    public function update(StorePuzzleRequest $request, Puzzle $puzzle)
    {
        $puzzle->update($request->validated());
        return new PuzzleResource($puzzle);
    }

    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Delete a puzzle.
     *
     * @param  \App\Models\Puzzle  $puzzle
     * @return \Illuminate\Http\Response
     */
    /******  0984fd12-9744-4b36-8d60-ba2ce8ff56dd  *******/
    public function destroy(Puzzle $puzzle)
    {
        $puzzle->delete();
        return response()->noContent();
    }
}
