<?php
	// CREATE AT LEAST 4 IF STATEMENTS USING ISSET, EMPTY, AND NULL
	$ex1 = '';
	if (isset($ex1)){
		echo "variable is set";
	}
	// ISSET CHECKS IF THE VARIABLE IS SET WITH A VALUE
	
	echo "<br>";

	$ex2 = 0;
	if (empty($ex2)){
		echo "var is empty meaning it is 0, empty, or not set";
	}
	//EMPTY CHECKS FOR EMPTY STRINGS, THE VALUE 0 AS A STRING FLOAT OR INT, NULL, FALSE, OR AN EMPTY ARRAY
	
	echo "<br>";

	$ex3 = "something";
	if (empty($ex3)){
		echo "variable is empty";
	}
	else{
		echo "variable is not empty";
	}
	// ANOTHER EMPTY EXAMPLE
	
	echo "<br";

	$ex4 = 'null';
	if (is_null($ex4)){
		echo "variable is either null or has no value declared";
	}
	// NULL


	// CREATE 4 EXAMPLES OF SWITCH CASE USING ISSET, EMPTY, AND NULL
	
	$myCase = 1;

	switch ($myCase) {
		case 1:
			//THIS IS THE ISSET CASE
			$myVar = 'hello';
			if (isset($myVar)){
				echo "Variable is set";
			}
			else{
				echo "Variable is not set";
			}
			echo "<br>";
			break;
		case 2:
			//THIS IS THE EMPTY CASE
			$myVar2 = '';
			if (empty($myVar2)){
				echo "Variable is empty";
			}
			else {
				echo "Variable is not empty";
			}
			echo "<br";
			break;
		case 3:
			//THIS IS THE NULL CASE
			$myVar3 = 'something';
			if (is_null($myVar3)){
				echo "variable is either null or has no value declared";
			}
			else{
				echo "variable is not null";
			}
			echo "<br";
			break;
	}
?>
