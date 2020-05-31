<?php

namespace App\Http\Controllers;

use App\Performa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformaController extends Controller
{

    public function api()
    {
        return view('user.performa'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Performa $performa)
    {
        //ini yang awal tapi data admin masih tersimpan jika menggunakan code ini
        // $performas = User::all();

        //code untuk menghilangkan data admin 'is_admin adalah kolom pada database' sedangkan '0' data yang akan ditampilkan 'is_admin'
        $performas = \App\User::where('is_admin', 0)->get();
        $mapel = \App\Mapel::all();
        return view('admin.performa', compact('performas'), compact('mapel'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
