<?php
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$fp = fopen("formdata.txt", "a");
$savestring = $firstname . "," . $email . "\n";
fwrite($fp, $savestring);
fclose($fp);
echo "<h1>You data has been saved in a text file!</h1>";
echo "<h2>Go Back!</h2>";
?>