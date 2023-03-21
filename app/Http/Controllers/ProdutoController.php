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

        /*  $validated = $request->validate([
            'nome'          => 'required',
            'quantidade'    => 'required',
            'valor'         => 'required',
        ]);
        */

        $validator = Validator::make($request->all(), [
            'nome'          => 'required',
            'quantidade'    => 'required',
            'valor'         => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('produto/create')
                        ->withErrors($validator)
                        ->withInput();
        }
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
        //
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
