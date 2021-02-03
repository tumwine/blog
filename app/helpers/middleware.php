<?php

function userOnly($redirect = "/index.php")
{
   if (empty($_SESSION["id"])) {
   	  $_SESSION["message"] = "You need to log in first";
   	  $_SESSION["type"] = "error";
   	  header("location: " . BASE_URL . $redirect);
   	  exit(0);
   }
} 

function adminOnly($redirect = "/index.php")
{
	 if (empty($_SESSION["id"]) || empty($_SESSION["admin"])) {
   	  $_SESSION["message"] = "You are not authorised";
   	  $_SESSION["type"] = "error";
   	  header("location: " . BASE_URL . $redirect);
   	  exit();
   }
} 

function guestOnly($redirect = "/index.php")
{
	  if (isset($_SESSION["id"])) {
   	  header("location: " . BASE_URL . $redirect);
   	  exit();
   }
} 