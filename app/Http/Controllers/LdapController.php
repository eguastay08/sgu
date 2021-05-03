<?php

namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\User;

class LdapController extends Controller
{
    public function createAccount(User $user, $password,$role){
        try{
            $ds = ldap_connect(env('LDAP_SERVER'));
        }catch(\Exception $e){
            throw new \ErrorException('not connect');
        }
            ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
            $r = ldap_bind($ds,env('LDAP_BIND_RDN'),env('LDAP_BIND_PASSWORD'));
            $dn_user="cn=$user->cedula, ou=users,".env('LDAP_DC');
            $ldaprecord['uid']=$user->cedula;
            $ldaprecord['givenName']="$user->f_name $user->s_name";
            $ldaprecord['sn']="$user->f_surname $user->s_surname";
            $ldaprecord['displayName']="$user->f_name $user->s_name $user->f_surname $user->s_surname";
            $ldaprecord['ou']='users';
            $ldaprecord["userPassword"]=$password;
            $ldaprecord['mail']=$user->email_inst;
            $ldaprecord['title']="$user->f_name $user->s_name $user->f_surname $user->s_surname";
            $ldaprecord['objectclass'][0]='top';
            $ldaprecord['objectclass'][1]='person';
            $ldaprecord['objectclass'][2]='organizationalPerson';
            $ldaprecord['objectclass'][3]='inetOrgPerson';
            if($r = ldap_add($ds, $dn_user, $ldaprecord)){
                $dn_group="cn=$role->name,ou=groups,".env('LDAP_DC');
                $ldaprecordGroup['memberUid']=$user->cedula;
                ldap_mod_add($ds, $dn_group, $ldaprecordGroup);
            }
            ldap_close($ds);
    }
}
