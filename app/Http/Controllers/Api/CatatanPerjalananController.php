<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CatatanPerjalanan;
use Illuminate\Http\Request;

class CatatanPerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'catatanPerjalanan' => []
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatatanPerjalanan $catatanPerjalanan)
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
