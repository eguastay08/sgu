<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;

class MenuController extends Controller
{

    private function buildMenu($user,$cod_menu=null){
        $menu=User::join('user_roles','users.id', '=', 'user_roles.id_user')
            ->join('role_access', 'user_roles.cod_rol', '=', 'role_access.cod_rol')
            ->join('access', 'role_access.cod_access', '=', 'access.cod_access')
            ->join('menu', 'access.cod_menu', '=', 'menu.cod_menu')
            ->select('menu.*')
            ->where('id','=',$user)
            ->where('cod_menu_father','=',$cod_menu)
            ->groupby('menu.cod_menu','menu.name','sgu.menu.order','sgu.menu.icon','sgu.menu.path','sgu.menu.cod_menu_father','sgu.menu.created_at','sgu.menu.updated_at')
            ->orderby('menu.order')
            ->get();
        foreach ($menu as $d){
            $submenu=$this->buildMenu($user,$d->cod_menu);
            if($submenu!=null){
                $d['submenu']=$submenu;
            }
        }
        return$menu;
    }
    public function getNavigation(Request $request){
        $user=$request->user();
        $menu=$this->buildMenu($user->id);
        return $this->response('false',Response::HTTP_OK,'200 OK',$menu);
    }
}
