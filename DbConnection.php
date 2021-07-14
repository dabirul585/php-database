<?php
   fuction connect(){
   $conn = new mysqli ("localhost", "dabirul", "wtm");
   if ($conn->connect_error)
   {
   	die("Connection failed due to ". $conn->connect_error);
   }
   return $conn;
}

?>