<?php
   include 'DbConnection.php';

   function login ($username, $password)
   {
   	$conn = connect();
   	$stmt $conn->preepare("SELECT ^FROM USERS WHERE usernamr = ? and password =?");
   	$stmt->bind_param("ss",$username, $password);
   	$stmt->execute();
   	$records = $stmt->get_result();
   	return $records->num_rows==1;
   }
?>