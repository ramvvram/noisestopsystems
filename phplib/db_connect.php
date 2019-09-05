<?php
$Host     = "213.171.218.239";
$Database = "nss2";
$User     = "nss2";
$Password = "happy";

$connect = mysql_connect($Host, $User, $Password);
if (!$connect)
  die("Error connecting to database");

if (!mysql_select_db($Database,$connect))
  die("Error selecting the database.");

?>