<?php
$dbhost="localhost";
$dbuser="root";
$dbpss="";
$dbname="login_sample_db";
if(!$con=mysqli_connect($dbhost,$dbuser,$dbpss,$dbname)){
    die("failed to connect");
}
?>
