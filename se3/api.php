<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['Technology']))
{
	$Technology=$_GET['Technology'];
	$M_name = get_M_name($Technology);
	echo "The technology head is ";
	if(empty($M_name))
	{
		response(200,"manager Not Found",NULL);
	}
	else
	{
		response(200,"manager Found",$M_name);
	}	
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>

