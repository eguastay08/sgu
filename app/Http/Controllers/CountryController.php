<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Country;
use App\Models\Parroquia;
use App\Models\Province;
use \Illuminate\Http\Response;
use Illuminate\Http\Request;


class CountryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Country::all(['name', 'ISO2']);

        return response()->json([
            'errors' => false,
            'code' => Response::HTTP_OK,
            'status'=>'200 OK',
            'data' => $data
        ], Response::HTTP_OK, Controller::$headers);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
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
    public static function show($cod_contry)
    {
        $find = Country::where('ISO2', $cod_contry)->firstOrFail();
        $find_provinces = Province::where('cod_country', $cod_contry)->get();
        $data = [
            "cod_country" => $find->cod_country,
            "name" => $find->name,
            "ISO2" => $find->ISO2,
            "provinces" => $find_provinces
        ];
        return response()->json([
            'errors' => false,
            'code' => Response::HTTP_OK,
            'status'=>'200 OK',
            'data' => $data,
        ], Response::HTTP_OK, Controller::$headers);

    }

    public static function search($cod_countrie,Request $request){
        if (isset($request->province) && isset($request->canton) && isset($request->parroquia)) {
            $parroquia=Parroquia::where('cod_parroquia',$request->parroquia)->firstOrFail();
            $data=[
                'cod_parroquia'=>$parroquia->cod_parroquia,
                'name'=>$parroquia->name
            ];
            return response()->json([
                'errors' => false,
                'code' => Response::HTTP_OK,
                'status'=>'200 OK',
                'data' => $data,
            ],Response::HTTP_OK, Controller::$headers);
        } else if (isset($request->province) && isset($request->canton)) {
           $canton=Canton::where('cod_canton',$request->canton)->firstOrFail();
            $data=[
                "cod_canton"=>$canton->cod_canton,
                "name"=>$canton->name,
                'parroquias'=>Parroquia::where('cod_canton',$canton->cod_canton)->get()
            ];
            return response()->json([
                'errors' => false,
                'code' => Response::HTTP_OK,
                'status'=>'200 OK',
                'data' => $data,
            ],Response::HTTP_OK, Controller::$headers);

        } else if (isset($request->province)) {//Retornar los cantones de una provincia
            $provincia= Province::where('cod_province', $request->province)->firstOrFail();
            $data = [
                "cod_province" => $provincia->cod_province,
                "name" => $provincia->name,
                "cantones"=>CantonController::index($provincia->cod_province)
            ];
            return response()->json([
                'errors' => false,
                'code' => Response::HTTP_OK,
                'status'=>'200 OK',
                'data' => $data,
            ], Response::HTTP_OK, Controller::$headers);
        } else {
            return CountryController::show($cod_countrie);
        }

    }

}
