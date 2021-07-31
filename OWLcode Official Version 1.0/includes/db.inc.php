<?php
/*
change server name and database info to FAU Lamp server.
*/
$servername = 'localhost';
$dbuser = 'f2020team13';
$dbpass = 'owlcode';
$dbname = 'f2020team13';
$dbport = 22;

$con = mysqli_connect($servername, $dbuser, $dbpass, $dbname);