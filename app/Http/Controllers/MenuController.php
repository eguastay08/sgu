<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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
        ->orderby('c.order')
        ->get();
    return $categories;
    }

    private function buildMenu($user,$cod_menu=null){
        $new_menu=array();
        $menu=User::join('user_roles','users.id', '=', 'user_roles.id_user')
            ->join('role_access', 'user_roles.cod_rol', '=', 'role_access.cod_rol')
            ->join('access', 'role_access.cod_access', '=', 'access.cod_access')
            ->join('menu', 'access.cod_menu', '=', 'menu.cod_menu')
            ->select('menu.*')
            ->where('id','=',$user)
            ->where('role_access.active','=','1')
            ->groupby('menu.cod_menu','menu.name','menu.order','menu.icon','menu.path','menu.cod_menu_father','menu.created_at','menu.updated_at')
            ->orderby('menu.order')
            ->get();
        foreach ($menu as $d){
            if(isset($d->cod_menu_father)){
                $cod_father=$d->cod_menu_father;
                $menu_father=Menu::where('cod_menu','=',$cod_father)
                    ->first();
                $exist=false;
                foreach ($new_menu as $nm){
                    if($nm->cod_menu==$menu_father->cod_menu){
                        $exist=true;
                    }
                }
                if(!$exist){
                    $item_menu=User::join('user_roles','users.id', '=', 'user_roles.id_user')
                        ->join('role_access', 'user_roles.cod_rol', '=', 'role_access.cod_rol')
                        ->join('access', 'role_access.cod_access', '=', 'access.cod_access')
                        ->join('menu', 'access.cod_menu', '=', 'menu.cod_menu')
                        ->select('menu.*')
                        ->where('id','=',$user)
                        ->where('menu.cod_menu_father','=',$menu_father->cod_menu)
                        ->where('role_access.active','=','1')
                        ->groupby('menu.cod_menu','menu.name','menu.order','menu.icon','menu.path','menu.cod_menu_father','menu.created_at','menu.updated_at')
                        ->orderby('menu.order')
                        ->get();
                    $menu_father['submenu']=$item_menu;
                    $new_menu[]=$menu_father;
                }
            }else{
                $categories=$this->getSystemsCategories($user,$d->cod_menu);
                if($categories!=null){
                    foreach ($categories as $c){
                        $c['path']="/systems/$c->cod_category";
                    }
                    $d['submenu']=$categories;
                }
                $new_menu[]=$d;
            }
        }
        GeneralFunctions::arraySort($new_menu, 'order', $order = SORT_ASC);
        return $new_menu;
    }
    public function getNavigation(Request $request){
        $user=$request->user();
        $menu=$this->buildMenu($user->id);
        return $this->response('false',Response::HTTP_OK,'200 OK',$menu);
    }
}
