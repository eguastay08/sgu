<?php

namespace App\Http\Controllers;

use App\Models\Log_user_access_platform;
use App\Models\Platform;
use App\Models\User;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Plataform;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Plataform::where('deleted','!=','1')->get();

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
        return $errors= Platform::verifyRequired($request);
        if($errors==null) {
            $category = Plataform::create($request->all());
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
     * @param  \App\Models\Plataform  $plataform
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $category= Plataform::where('deleted','!=','1')->where('cod_plataform',$request->cod_plataform)->firstOrFail();
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
     * @param  \App\Models\Plataform  $plataform
     * @return \Illuminate\Http\Response
     */
    public function update(Plataform $plataform,Request $request)
    {
        $plataform=Plataform::where('cod_plataform',$request->cod_plataform)->where('deleted',0)->firstOrFail();
         /*DB::listen(function ($query) {
             echo $query->sql ;
         });*/
         $plataform->update($request->all());
        return response()->json([
            'errors' => false,
            'code' => Response::HTTP_OK,
            'status'=>'200 OK',
            'data'=>$plataform
        ], Response::HTTP_OK, Controller::$headers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plataform  $plataform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category=Plataform::where('cod_plataform',$request->cod_plataform)->where('deleted',0)->firstOrFail();
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

    public function redirect(Request $request){
        $url=$request->url;
        $user=$request->user();
        $id_user=$user->id;
         $plataform_access=User::join('user_roles as ur','users.id','=','ur.id_user')
            ->join('role_platforms as rp','ur.cod_rol','=','rp.cod_rol')
            ->join('platforms as p','rp.cod_platform','=','p.cod_platform')
            ->select('p.*')
            ->where('users.id','=',$user->id)
            ->where('p.url','=',$url)
            ->where('p.deleted','=','0')
            ->firstOrFail();
         $log=[
            "user_agent"=>$_SERVER['HTTP_USER_AGENT'],
            "ip"=>$_SERVER['REMOTE_ADDR'],
            "id_user"=>$id_user,
            "cod_platform"=>$plataform_access->cod_platform
        ];
         Log_user_access_platform::create($log);
    }

    public function getPlatformsUserAccess(Request $request){
        $user=$request->user();
        $plataforms=User::join('user_roles as ur','users.id','=','ur.id_user')
            ->join('role_platforms as rp','ur.cod_rol','=','rp.cod_rol')
            ->join('platforms as p','rp.cod_platform','=','p.cod_platform')
            ->join('categories as c','p.cod_category','=','c.cod_category')
            ->select('p.name','p.image','p.url','p.detail','p.session_required')
            ->where('users.id','=',$user->id)
            ->where('c.cod_category','=',$request->id)
            ->where('p.deleted','=','0')
            ->orderby('p.order')
            ->get();
        return $this->response('false',Response::HTTP_OK,'200 OK',$plataforms);
    }
}
