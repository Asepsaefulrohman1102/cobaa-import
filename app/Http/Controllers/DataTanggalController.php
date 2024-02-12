<?php

namespace App\Http\Controllers;

use App\Models\DataTanggal;
use App\Http\Requests\StoreDataTanggalRequest;
use App\Http\Requests\UpdateDataTanggalRequest;

class DataTanggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDataTanggalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataTanggalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataTanggal  $dataTanggal
     * @return \Illuminate\Http\Response
     */
    public function show(DataTanggal $dataTanggal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataTanggal  $dataTanggal
     * @return \Illuminate\Http\Response
     */
    public function edit(DataTanggal $dataTanggal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataTanggalRequest  $request
     * @param  \App\Models\DataTanggal  $dataTanggal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataTanggalRequest $request, DataTanggal $dataTanggal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataTanggal  $dataTanggal
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataTanggal $dataTanggal)
    {
        //
    }
}
