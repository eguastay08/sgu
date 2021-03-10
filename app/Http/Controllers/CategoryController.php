<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Category::where('deleted','!=','1')->get();

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors=array();

        if(!isset($request->name)){
            $errors[]=[
                "field"=>"name",
                "msj"=>"El campo name es requerido"
            ];
        }
        if($errors==null) {
            $category = Category::create($request->all());
            return response()->json([
                'errors' => false,
                'code' => Response::HTTP_CREATED,
                'status' => '201 Created',
                'data' => $category
            ], Response::HTTP_CREATED, Controller::$headers);
        }else{
            return response()->json([
                'errors' => true,
                'code' => Response::HTTP_BAD_REQUEST,
                'status' => '400 Bad Request',
                'data' => $errors
            ], Response::HTTP_BAD_REQUEST, Controller::$headers);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $category= Category::where('deleted','!=','1')->where('cod_category',$request->cod_category)->firstOrFail();
        return response()->json([
            'errors' => false,
            'code' => Response::HTTP_OK,
            'status'=>'200 OK',
            'data'=>$category
        ], Response::HTTP_OK, Controller::$headers);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $category=Category::where('cod_category',$request->cod_category)->where('deleted',0)->firstOrFail();
        $category->update($request->all());
        return response()->json([
            'errors' => false,
            'code' => Response::HTTP_OK,
            'status'=>'200 OK',
            'data'=>$category
        ], Response::HTTP_OK, Controller::$headers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category=Category::where('cod_category',$request->cod_category)->where('deleted',0)->firstOrFail();
        $category->update(["deleted"=>"1"]);
        $messages=[
            "Se elimino correctamente"
        ];
        return response()->json([
            'errors' => false,
            'code' => Response::HTTP_OK,
            'status'=>'200 OK',
            'data'=>[
                'msj'=>$messages
            ],
        ], Response::HTTP_OK, Controller::$headers);
    }
}
