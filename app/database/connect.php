<?php

$host = "cis9cbtgerlk68wl.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "cmjqwx5buumfuuna";
$pass = "s3xfui8th4q3t3vn";
$db_name ="ia61bdz6lm91hv34";

$conn = new MySQLi($host,$user,$pass,$db_name);

if($conn->connect_error) {
	die("Database connection error".$conn->connect_error);
}
