<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos =Produto::orderBy('nome')->get();
        return view ('produto.index',['produtos' =>$produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

    /* $validated = $request->validate([
            'nome'          => 'required',
            'quantidade'    => 'required',
            'valor'         => 'required',
        ]);
        */

        $validator = Validator::make($request->all(), [
            'nome'          => 'required',
            'quantidade'    => 'required|integer',
            'valor'         => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('produto/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        $produto = new Produto;
        $produto -> nome = $request->nome;
        $produto -> quantidade = $request->quantidade;
        $produto -> valor = $request -> valor;
        $produto -> save();
        
        return redirect('/produto')-> with ('status','Produto criado com sucesso!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = produto::find($id);
        return view('produto.show' , ['produto' =>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::find($id);
        return view('produto.edit',['produto'=>$produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
