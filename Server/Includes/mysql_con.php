<?php

session_start();
date_default_timezone_set('Australia/Brisbane');

$con = mysqli_connect('127.0.0.1','root','','gameshar_gsr',3306);

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


   // mysqli_select_db($con, "edreamco_gsr") or die ("Error: Couldn't find database.");

    /*$con = mysqli_connect('localhost','root','root','gameshar_dbs');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "gameshar_dbs") or die ("Error: Couldn't find database.");
*/
    

	include_once("geoplugin.php");
    include_once("perms.php");
    include_once("tokengen.php");

?>
