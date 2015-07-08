<?php

require 'database.php';

$day = date("d");
$month = date("m");

echo "HAPPY BIRTHDAY<BR>";

$query = "select emp_no, name from employee where DAY(dob)='$day' and MONTH(dob)='$month'";
$query_run = mysql_query($query);
$query_num_rows = mysql_num_rows($query_run);

if($query_num_rows>=1)
{
	
	while($query_row = mysql_fetch_assoc($query_run))
	{
		$name = $query_row['name'];
		$emp_no = $query_row['emp_no'];
		echo "$name<br>";
	}
	
}
else
{
	echo "No birthday today.";
}

?>