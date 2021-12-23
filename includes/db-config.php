<?php 

/**
 * DB PARAMS VALUES
 */
define("DB_SERVER", "localhost");
define("DB_NAME","product_app");
define("DB_USER","root");
define("DB_PASS","");

/**
 * connect to database
 */
$con = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

/**
 * check if connection fail
 */
if($con->connect_errno){
    $msg = "connection faild";
    $msg .= $con->connect_error;
    exit($msg);
}

?>