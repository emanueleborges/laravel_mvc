<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;
use Illuminate\Support\Facades\Route;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        //$series = Serie::all();
        $series = Serie::query()->OrderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        //$request->session()->forget('mensagem.sucesso');

        //$series = DB::select('select nome from series;');
        return view('series.index')->with('series', $series)->with('mensagemSucesso',$mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeriesFormRequest $request)
    {

        $serie = Serie::create($request->all());
        //session(['mensagem.sucesso'=>'Adicionada com Sucesso']);
        $request->session()->flash("mensagem.sucesso", "'{$serie->nome }' adicionado com sucesso");

        return redirect()->route('series.index');

        // $nomeSerie      = $request->input('nome');
        // $serie          = new Serie();
        // $serie->nome    = $nomeSerie;
        // $serie->save();
        //return redirect('/series');

        // aula mvc
        //dd($serie);
        // if (DB::insert('insert into series (nome) values (?)', [$nomeSerie])) {
        //     return redirect('/series');
        // } else {
        //     return redirect('series.create');
        // };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $series, Request $request)
    {
        return view('series.edit')->with('serie', $series);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Serie $series, SeriesFormRequest $request)
    {

        $series->fill($request->all());
        $series->save();
        //$request->session()->flash("mensagem.sucesso", "'{$series->nome }' Atualizado com sucesso");
        return redirect()->route('series.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $series, Request $request)
    {
        //dd($series);
        //Serie::destroy($request->series);
        $series->delete();
        $request->session()->flash("mensagem.sucesso", "$series->nome removido com sucesso");
        return redirect()->route('series.index');
    }
}
