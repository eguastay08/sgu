<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Province;
use \Illuminate\Http\Response;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class CountryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Country::all(['name','ISO2']);

        return response()->json([
            'errors'=>false,
            'code'=>Response::HTTP_OK,
            'data'=>$data
        ],Response::HTTP_OK,Controller::$headers);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  /*  public function store(Request $request)
    {
        $new=Country::created($request->all());
        return $new;
    }*/

    /**
     * Display the specified country.
     *
     * @param  $country Code iso2 country
     * @return \Illuminate\Http\Response
     */
    public function show($cod_contry)
    {
        $find=Country::where('ISO2',$cod_contry)->firstOrFail();
        $find_provinces=Province::where('cod_country',$cod_contry)->get();
        $data=[
            "cod_country"=>$find->cod_country,
            "name"=>$find->name,
            "ISO2"=>$find->ISO2,
            "provinces"=>$find_provinces
        ];
        return response()->json([
            'errors'=>false,
            'code'=>Response::HTTP_OK,
            'data'=>$data,
        ],Response::HTTP_OK,Controller::$headers);
    }
}
