<?php

require 'database.php';

$day = date("d");
$month = date("m");
//echo "$day-$month";

echo "HAPPY BIRTHDAY<BR>";

$query = "select empno, name from birthday where DAY(dob)='$day' and MONTH(dob)='$month'";


/*if($query_run = sqlsrv_query($conn, $query))
	echo "working";
if($query_num_rows = sqlsrv_num_rows($query_run))
	echo "hasdh";

if($query_num_rows>=1)
{
	//echo "sdfsd";
	while($query_row = sqlsrv_fetch_assoc($query_run, SQLSRV_FETCH_ASSOC))
	{
		$name = $query_row['name'];
		$emp_no = $query_row['emp_no'];
		echo "$name<br>";
	}
	
}
else
{
	echo "No birthday today.";
}*/

//$sql = "SELECT * FROM birthday";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $query , $params, $options );

//$query_run = sqlsrv_query($conn, $)
$query_num_rows = sqlsrv_num_rows( $stmt );
//echo $query_num_rows;

if($query_num_rows>=1)
{	
	while($query_row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
	{
		//echo "dfgf";
		$name = $query_row['name'];
		$emp_no = $query_row['empno'];
		echo "$emp_no - $name";
		$pic_id = str_pad($emp_no, 7, '0', STR_PAD_LEFT);
		echo "<img src = /photos/$pic_id">;
	}
}
else
	echo "no";

?>
