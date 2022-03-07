<html>
<head>
	<title>
	Bill Calculator
	</title>
</head>
<body>
<form action="#" method="post">
	<input type="number" name="unit" placeholder="Please enter no of units"><br>
	<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$unit=$_POST["unit"];
	echo calculate_bill($unit);
	
}
else{
	echo "please enter a data";
}
function calculate_bill($unit)
{
	$unit_cost_first=3.50;
	$unit_cost_second=4.00;
	$unit_cost_third=5.20;
	$unit_cost_fourth=6.50;
	echo "Total amount of ".$unit."- rs)";
	if($unit<=50)
	{
	 	return $unit_cost_first*$unit; 
	}
	else if($unit>50&&$unit<=100)
	{
		$bill_50unit=50*$unit_cost_first;
		$remain_unit=$unit-50;
		return number_format((float)($remain_unit*$unit_cost_second)+$bill_50unit, 2, '.', '');
	}
	else if($unit>100&&$unit<=200)
	{
		$remain_unit=$unit-150;
		$bill_150unit=(100*$unit_cost_second)+(50*$unit_cost_first);
		return number_format((float)($remain_unit*$unit_cost_third)+$bill_150unit, 2, '.', '');
		
	}
	else
	{
		$remain_unit=$unit-250;
		$bill_250unit=(100*$unit_cost_fourth)+(100*$unit_cost_second)+(50*$unit_cost_first);
		return number_format((float)($remain_unit*$unit_cost_third)+$bill_250unit, 2, '.', '');;
	}
}
?>
</body>
</html>
