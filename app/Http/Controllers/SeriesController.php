<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $series = Serie::create($request->all());

        return redirect(route('series.index'))->with('mensagem.sucesso', "Série '$series->nome' adicionada com sucesso");
    }

    public function destroy(Serie $series)
    {
        $series->delete();

        return redirect(route('series.index'))->with('mensagem.sucesso', "Série '$series->nome' excluida com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, Request $request)
    {
        $series->fill($request->all());
        $series->save();

        return redirect(route('series.index'))->with('mensagem.sucesso', "Série '$series->nome' atualizada com sucesso");
    }
}
