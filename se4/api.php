<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['Technology']) and !empty($_GET['M_name']))
{
	$Technology=$_GET['Technology'];
	$M_name=$_GET['M_name'];

	$r = get_M_name($Technology,$M_name);
	
	if(empty($r))
	{
		response(200,"Product Not Found",NULL);
	}
	else
	{
		response(200,"Product Found",$r);
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
	$response['data is correct']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>

