<?php
$conn_string = "host ec2-54-163-97-228.compute-1.amazonaws.com"
        . " port = 5432"
        . " dbname = db7ocujvrjhkhf"
        . " user = uccxffblhubvvq"
        . " password = 0f47f8f79cd720b045b6f135b87a10737bf716e682dace62d0100d41fcf23a90";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } 
?>