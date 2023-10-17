<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('filmes.index', [
            'filmes' => Filme::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filmes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Filme::create($request->all());
        return redirect()->route('filmes.index')->with('success', 'Filme cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('filmes.show', [
            'filme' => Filme::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('filmes.edit', [
            'filme' => Filme::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filme = Filme::findOrFail($id);
        $filme->update($request->all());
        return redirect()->route('filmes.index')->with('success', 'Filme atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();
        return redirect()->route('filmes.index')->with('success', 'Filme excluído com sucesso!');
    }
}
