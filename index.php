<?php 

$min = 0; 
$max = 12; 
$result = rand($min,$max); 

if ($result == 0) { 
header("Location: http://www.facebook.com"); 

exit(); 
} 

if ($result == 1) { 
header("Location: http://www.lichess.org"); 
exit(); 
} 

…

if ($result == 11) { 
header("Location: http://www.instagram.com"); 

exit();  
} 

?>