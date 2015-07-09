<?php
//phpinfo();
//if(!@sqlsrv_connect('webserver', 'sa', 'sql@123') || !@sqlsrv_select_db('website'))
//die(sqlsrv_error());
//echo "not working";

$server = 'webserver';
$a = array("Database" => "website", "UID"=> "sa", "pwd" => "sql@123");
$conn = sqlsrv_connect($server, $a);
//echo "working";
?>