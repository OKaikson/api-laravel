<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCargoRequest;
use App\Http\Requests\UpdateCargoRequest;
use App\Models\Cargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargo = Cargo::all();
        return view('cargos.index', compact('cargo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cargos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCargoRequest $request)
    {
        // dd($request->all());
        if (Cargo::create($request->all())) {
            return redirect()->route('cargo.index');
        } else {
            return view('welcome');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cargo $cargo)
    {
        return view('cargos.create', compact('cargo')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCargoRequest $request, Cargo $cargo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cargo $cargo)
    {
        //
    }
}
