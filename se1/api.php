<?php
header("Content-Type:application");
require "data.php";

if(!empty($_GET['Branch_name']))
{
	$Branch_name=$_GET['Branch_name'];
	$No_employees = get_No_employees($Branch_name);
	echo "<h1> The Branch number you entered has \n </h1>";
	if(empty($No_employees))
	{
		response(NULL);
		echo "<h3> You entered wrong branch name \n </h3>";
	}
	else
	{
		response($No_employees);
	}	
}
else
{
	response(NULL);
}

function response($data)
{
	header("HTTP/1.1 ");
	
	echo $data;
}

?>

