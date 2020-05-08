<?php
header("Content-Type:application/json");
require "data.php";
if(!empty($_GET['Technology']))
{
	$Technology=$_GET['Technology'];
	$employees = get_employees($Technology);
	echo "The number of employees under the technology you choiced has \n";	
	if(empty($employees))
	{
		response(200,"Technology Not Found",NULL);
	}
	else
	{
		response(200,"Technology Found",$employees);
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

