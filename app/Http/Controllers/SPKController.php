<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SPKController extends Controller
{

    public function index()
    {
        return view('spk-data.index');
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
     * @param  \App\Http\Requests\Storetb_alternatifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_alternatifRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_alternatif  $tb_alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(tb_alternatif $tb_alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_alternatif  $tb_alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_alternatif $tb_alternatif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_alternatifRequest  $request
     * @param  \App\Models\tb_alternatif  $tb_alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetb_alternatifRequest $request, tb_alternatif $tb_alternatif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_alternatif  $tb_alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_alternatif $tb_alternatif)
    {
        //
    }
}