<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\ArtigoContent;
use App\Models\ArtigoTipo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return wryyyy();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artigo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $artigo = new Artigo();
        $artigo->autor_id = 1; //TODO autor_id = usuario pertencente à session
        $artigo->artigo_tipo_id = ArtigoTipo::tipo('noticia')->first()->id;
        $artigo->unidade_id = 1; // TODO unidade of usuario da sessão
        $artigo->titulo = request('titulo');
        $artigo->tldr = request('tldr');
        $artigo->ativo = request('ativo');
        $artigo->published_at = Carbon::createFromFormat('d/m/Y H:i',request('published_at'));

        $artigo->save();

        $contents = new ArtigoContent();
        $contents->artigo_id = $artigo->id;
        $contents->conteudo = request('contents');

        $contents->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artigo $artigo)
    {
        $params = compact('artigo');
        return view('artigo.show', $params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
