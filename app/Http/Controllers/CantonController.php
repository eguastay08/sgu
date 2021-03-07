<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CantonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index($cod_province)
    {
        $a= Canton::where('cod_province',$cod_province)->get();
        return $a;
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
     * @param  \App\Models\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return Canton::query();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function edit(Canton $canton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canton $canton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canton $canton)
    {
        //
    }
}
