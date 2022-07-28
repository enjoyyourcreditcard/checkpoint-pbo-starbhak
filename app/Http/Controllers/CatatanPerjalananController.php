<?php

namespace App\Http\Controllers;

use App\Models\CatatanPerjalanan;
use App\Models\User;
use App\Http\Requests\StoreCatatanPerjalananRequest;
use App\Http\Requests\UpdateCatatanPerjalananRequest;

class CatatanPerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatatanPerjalananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatatanPerjalananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit(CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatatanPerjalananRequest  $request
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatatanPerjalananRequest $request, CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }
}
