<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    private function getSystemsCategories($user,$cod_menu){
    $categories=User::join('user_roles as ur', 'users.id','=','ur.id_user')
        ->join('role_platforms as rp','ur.cod_rol','=','rp.cod_rol')
        ->join('platforms as p','rp.cod_platform','=','p.cod_platform')
        ->join('categories as c','p.cod_category', '=','c.cod_category')
        ->join('menu as m', 'c.cod_menu','=','m.cod_menu')
        ->select('c.*')
        ->where('users.id', '=', $user)
        ->where('m.cod_menu','=',$cod_menu)
        ->where('c.delete','=','0')
        ->groupby('c.cod_category','c.name','c.detail','c.order','c.delete','c.created_at','c.updated_at','c.cod_menu')
        ->get();
    return $categories;
    }
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
            if(!isset($submenu)){
                $d['submenu']=$submenu;
            }else{
                $categories=$this->getSystemsCategories($user,$d->cod_menu);
                if($categories!=null){
                    foreach ($categories as $c){
                        $c['path']="/systems/$c->cod_category";
                    }
                    $d['submenu']=$categories;
                }
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
