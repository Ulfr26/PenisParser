<?php
/* Run this file with 'php -f ReadWritePenis.php' */
echo "Name of your file? : ";
$prompt = fopen ("php://stdin","r");
$fileName = trim(fgets($prompt));

$myFile = file_get_contents($fileName) or die("Unable to open file");
$pattern = '/\w+/';
$penifiedText = preg_replace($pattern, 'penis', $myFile);
file_put_contents($fileName, $penifiedText);
fclose($prompt);
?>
