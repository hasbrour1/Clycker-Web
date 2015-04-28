<html>
<body>
<h1>Submitted</hl>
<a href="homepage.html">
                <div id="link1">
                    <br>
                    <font size="6">Back Home</font>
                </div>
                </a>
<?php
$testcode = $_POST['testCode'];
$comment = $_POST['comment'];
$numquest = $_POST['numQuest'];

$ourFileName = "tests.txt";
$ourFileName2 = "getTests.txt";
$fh = fopen($ourFileName, 'a') or die("Can't open file");
$fh2 = fopen($ourFileName2, 'a') or die("Can't open file");
fwrite($fh, "test");
fwrite($fh, "\r\n");
fwrite($fh, $testcode);
fwrite($fh, "\r\n");
fwrite($fh, $numquest);
fwrite($fh, "\r\n");
fwrite($fh, $comment);
fwrite($fh, "\r\n");

fwrite($fh2, $testcode);
fwrite($fh2, "\r\n");
fwrite($fh2, $numquest);
fwrite($fh2, "\r\n");
fclose($fh2);
fclose($fh);
?>
</body>
</html>