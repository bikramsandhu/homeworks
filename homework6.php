<?php
	echo "FUNCTIONS WITH ARBITRARY NUMBER OF ARGUMENTS => EXAMPLE ONE".'<br>';
	//the following with basically help aid with any number of arguments following the call for function
	function foo(){
		$args = func_get_args();
		foreach ($args as $k => $v){
			echo "arg".($k+1).": $v"."<br>";
		}
	}
	foo ('hello','my','name','is','bikram');
	echo '<br>';

	echo "USING GLOB() TO FIND FILES => EXAMPLE TWO".'<br>';
	//this searches for files using a pattern
	$files = glob('*.php');
	//$files = glob('*.{php,txt}', GLOB_BRACE); checks for multiple file types
	//$files = glob('../images/a*.jpg); can query files from a path
	print_r($files);
	echo '<br><br>';	 

	echo "MEMORY USAGE INFORMATION => EXAMPLE THREE".'<br>';
	//checks memory usage of code so coder can try to maximize efficiency
	echo "Memory Usage is ".memory_get_usage()."bytes";
	echo '<br><br>';

	echo "CPU USAGE INFORMATION => EXAMPLE FOUR".'<br>';
	echo "This doesn't work on Windows :(";
	echo '<br><br>';

	echo "MAGIC CONSTANTS => EXAMPLE FIVE";
	function my_debug($msg, $line){
		echo "Line $line: $msg".'<br>';
	}
	echo '<br>';
	my_debug("debugging message", __LINE__);
	echo '<br><br>';

	echo "GENERATING UNIQUE ID'S => EXAMPLE SIX";
	//this will generate some random sum of numbers
	echo '<br>';
	echo uniqid();
	echo '<br><br>';

	echo "SERIALIZATION => EXAMPLE SEVEN";
	//if you have a complex variable to store in a database or text file, instead of creating formatted strings
	//we can serialize and unserialize
	$myComplexVar = array('NJIT', 82, array(1, 'two', 'three'), 'PHP');
	//converts to string
	$serializedStr = serialize($myComplexVar);
	echo '<br>';
	echo 'This is the serialized string:'.'<br>';
	echo $serializedStr.'<br>';
	//changing back to original
	echo '<br>';
	echo 'This is the same string unserialized:';
	//$newStr = $unserialize($serializedStr);    ***PROBLEM CODE***
	print_r($newStr);
	echo '<br><br>';

	echo "COMPRESSING STRINGS => EXAMPLE EIGHT";
	echo '<br>';
	$longStr = "Hello my name is Bikramjeet Singh Sandhu and I go to NJIT where I study Business and Information
	Systems. I am currently a sophomore and I am in Phi Eta Sigma National Honors Society as well as the Sikh
	Students Association.";
	$compressed = gzcompress($longStr);
	//gzencode compresses at a different algorithm
	echo "Original Size: ".strlen($longStr);
	echo '<br>';
	echo "Compressed Size: ".strlen($compressed);
	echo '<br><br>';

	echo "REGISTER SHUTDOWN FUNCTION => EXAMPLE NINE";
	$start_time = microtime(true);
	function my_shutdown() {
		global $start_time;
		echo "execution took: ".(microtime(true) - $start_time)." seconds";
	}
?>
