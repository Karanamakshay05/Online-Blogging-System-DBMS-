<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Blog";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
