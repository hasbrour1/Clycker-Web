<html><head>
        <title>Clycker Web Portal</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" media="all" href="res/css/style.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                
                <a href="homepage.html">
                <div id="namespace">
                   
                    <header>Clycker Web Portal</header>
                   
                </div>    
			 </a>
			 </div>
			 
			 <div id="linkspace">
                <div id="buffer">                    
                </div>
               
                <a href="Students.php">
                <div id="link1">
                    <br>
                    <font size="6">Students</font>
                </div>
                </a>
                
                <a href="teachers.html">
                <div id="link2">
                    <br>
                    <font size="6">Teachers</font>
                </div>
                </a>
				
				<a href="results.php">
                <div id="link2">
                    <br>
                    <font size="6">Test Results</font>
                </div>
                </a>
            </div>
			 <div id="main1">
			<?php

$test = "test\r\n";

$handle = fopen("studentanswers.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {

        echo $line;
		echo "<br></br>";
		echo "\r\n";
    }

    fclose($handle);
} else {
    echo "unable to read line";
} 
?>
</div>
</body></html>