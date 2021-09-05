<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cleo";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	echo ("failed to connect!");
}
