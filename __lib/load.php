<?php
include __DIR__."/../class/databaseclass.php";
include __DIR__."/../class/userclass.php";



 global $config;
 $config = file_get_contents(__DIR__."/../config.json");
 


  function get_config($key,$default=null){
    global $config;
    $array = json_decode($config,true);
    if(isset($array[$key])){
        return $array[$key];
    }else{
        return $default;
    }
 }





?>