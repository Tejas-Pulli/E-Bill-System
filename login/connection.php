<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "generate_bill";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
