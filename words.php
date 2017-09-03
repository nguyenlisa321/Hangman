<?php
$arr = array();
	$fileptr = fopen("words.txt", "r");
 	if(flock($fileptr, LOCK_SH)){
 		while ($line = fgets($fileptr)) {
 			array_push($arr, trim($line)); 
 		}

 		}
fclose($fileptr);
echo json_encode($arr[rand(0, count($arr))]);
?>