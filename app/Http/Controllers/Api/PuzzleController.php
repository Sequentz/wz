<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePuzzleRequest;
use App\Http\Resources\PuzzleResource;
use App\Models\Puzzle;
use Illuminate\Http\Response;

class PuzzleController extends Controller
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

    public function destroy(Puzzle $puzzle)
    {
        $puzzle->delete();
        return response()->noContent();
    }
}
