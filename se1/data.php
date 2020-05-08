<?php

function get_No_employees($Branch_name)
{
	$Branches = [
		"Paris"=>1200,
		"New_York"=>7000,
		"San_Francisco"=>9000		
	];
	
	foreach($Branches as $Branch=>$No_employees)
	{
		if($Branch==$Branch_name)
		{
			return $No_employees;
			break;
		}
	}
}

?>

