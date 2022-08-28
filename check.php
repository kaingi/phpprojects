<?php
include 'db_connection.php';
$conn = opencon();
echo "conneccted seccesfully";
closecon($conn);
?>