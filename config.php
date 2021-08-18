<?php
function dd($data){
    echo "<pre>";
    var_dump($data);
    die;
} //tao bien de show du lieu

define('BASE_MAIN', __DIR__);//cai dat link goc
define('LIB', '/mvc/Publics');