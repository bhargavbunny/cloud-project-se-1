<?php

function get_employees($Technology)
{
	$techies = [
		"Java"=>4500,
		"Devops"=>100,
		"DotNet"=>1000,
		"HR"=>25,
		"Datascientist"=>20		
	];
	
	foreach($techies as $tech=>$employees)
	{
		if($tech==$Technology)
		{
			return $employees;
			break;
		}
	}
}

?>

