<?php

namespace App\Http\Controllers;

use App\Models\Log_user_access_platform;
use App\Models\User;
use Illuminate\Http\Request;

class LogUserAccessPlatformController extends Controller
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
    public static function create(User $user)
    {
        return $user;
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
     * @param  \App\Models\Log_user_access_platform  $log_user_access_plataform
     * @return \Illuminate\Http\Response
     */
    public function show(Log_user_access_platform $log_user_access_plataform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Log_user_access_platform  $log_user_access_plataform
     * @return \Illuminate\Http\Response
     */
    public function edit(Log_user_access_platform $log_user_access_plataform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Log_user_access_platform  $log_user_access_plataform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log_user_access_platform $log_user_access_plataform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Log_user_access_platform  $log_user_access_plataform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log_user_access_platform $log_user_access_plataform)
    {
        //
    }
}
