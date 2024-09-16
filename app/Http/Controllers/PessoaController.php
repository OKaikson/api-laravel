<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePessoaRequest;
use App\Http\Requests\UpdatePessoaRequest;
use App\Models\Cargo;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = Pessoa::orderBy('id','desc')->get();
        // dd($pessoas[0]->cargo->id);
        return view('pessoas.index', compact('pessoas')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cargo = Cargo::all();
        return view('pessoas.create', compact('cargo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePessoaRequest $request)
    {
        // dd(|$request->all());
        if (Pessoa::create($request->all())) {
            return redirect()->route('pessoa.index');
        } else {
            return view('welcome');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoa $pessoa)
    {
           
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoa $pessoa)
    {
        $cargo = Cargo::all();
        return view('pessoas.create', compact('pessoa', 'cargo')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePessoaRequest $request, Pessoa $pessoa)
    {
        // dd($request);
        $pessoa->nome_completo = $request->nome_completo;
        $pessoa->celular = $request->celular;        
        $pessoa->endereco = $request->endereco;
        $pessoa->nascimento = $request->nascimento;
        $pessoa->save();

        return redirect()->route('pessoa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa)
    {
        // dd($pessoa);
        if (!$pessoa->delete()){
            return back();
        } else {
            // $send = [
            //     'head' => 'Tudo pronto',
            //     'type' => 'success',
            //     'msg' => 'Registro deletado com sucesso!'
            // ];
            return redirect()->route('pessoa.show');
        }
    }

    public function confirmDelete(Pessoa $pessoa)
    {
        $data = $pessoa;
        return view('layouts.confirm-delete', compact('data'));
    }
}
