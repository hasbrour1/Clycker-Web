
<?php
$testcode = $_POST['testCode'];
$comment = $_POST['comment'];
$numquest = $_POST['numquest'];

$ourFileName = "tests.txt";
$fh = fopen($ourFileName, 'a') or die("Can't open file");
fwrite($fh, $testcode);
fwrite($fh, $numquest);
fwrite($fh, $comment);
fclose($fh);
?>
