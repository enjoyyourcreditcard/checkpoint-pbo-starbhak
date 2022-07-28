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
        return view('catatanPerjalanan.index', [
            'datas' => CatatanPerjalanan::where('user_id', auth()->user()->id)->get()
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
     * @param  \App\Http\Requests\StoreCatatanPerjalananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatatanPerjalananRequest $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'jam' => 'required',
            'suhu' => 'required',
            'lokasi' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        CatatanPerjalanan::create($validatedData);

        return redirect('/catatan-perjalanan');
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
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'jam' => 'required',
            'suhu' => 'required',
            'lokasi' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        CatatanPerjalanan::where('id', $catatanPerjalanan->id)->update($validatedData);

        return redirect('/catatan-perjalanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatatanPerjalanan $catatanPerjalanan)
    {
        CatatanPerjalanan::destroy($catatanPerjalanan->id);

        return redirect('/catatan-perjalanan');
    }
}
