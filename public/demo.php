<?php

    try{
        $ldap = ldap_connect("ldap://190.15.128.251");
    }catch(\Exception $e){
        throw new \ErrorException('not connect');
    }
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    $ds= ldap_bind($ldap,"cn=admin,dc=ldapmaster,dc=ueb,dc=edu,dc=ec","LD@P.2021.**@@");
    $basedn="ou=users,dc=ldapmaster,dc=ueb,dc=edu,dc=ec";
    $searchResults = ldap_search($ds, "dc=ldapmaster,dc=ueb,dc=edu,dc=ec", "cn=0250366515");
    $entry=ldap_first_entry($ds, $searchResults);
    $userdata['userPassword']="123455";
    ldap_mod_replace($ds, ldap_get_dn($ds, $entry) , $userdata);
    ldap_close($ds);
