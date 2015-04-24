<?php

$test = "test\r\n";

$handle = fopen("tests.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
		
		if($line === $test){
			echo "<br></br>";
			echo "\r\n";
			
			$line = fgets($handle);
			
			echo "Test Code: ";
			echo $line;
			echo "<br></br>";
			echo "\r\n";
		
			$line = fgets($handle);
			echo "Number of Questions: ";
			echo $line;
			echo "<br></br>";
			echo "\r\n";
			
			$line = fgets($handle);
		}
        echo $line;
		echo "<br></br>";
		echo "\r\n";
    }

    fclose($handle);
} else {
    echo "unable to read line";
} 
?>