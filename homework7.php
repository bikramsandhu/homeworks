<?php
	echo "GLOBAL example".'<br>';
	//this lets variables be accessed in a global scope
	function globalexample(){
		$test = "Local Message";
		echo 'Global scope of test word: '.$GLOBALS["test"];
		echo '<br>';
		echo 'Current scope of the test word: '.$test;
	}
	$test = "Hello world";
	globalexample();
	echo '<br><br>';

	echo "SERVER example".'<br>';
	//this is an array that contains information like headers, paths, and script locations
	echo "Php self element example:".'<br>';
	//this returns the filename of the script
	echo $_SERVER['PHP_SELF'];
	echo '<br><br>';

	echo "GET example".'<br>';
	//GET can be used to collect form data after submitting an HTML form with the method "get"

	echo '<br><br>';

	echo "POST example".'<br>';


?>
