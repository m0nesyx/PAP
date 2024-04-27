<?php include("connection/connect.php");

$res= $con->query("SELECT * FROM User");
print_r($res);

?>