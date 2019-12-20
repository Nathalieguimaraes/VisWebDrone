<?php 
ini_set('display_errors','Off');
define('WP_DEBUG_DISPLAY', false);


$f = fopen ("http://localhost/test/jQuery-File-Upload/orthomap/file2.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
        json_encode(array(
            'my_var' => $value
        ));
        $lat = substr($value, -13, 13);
        echo "<p>".$lat."</p>"; 

        $lon = substr($value, -32, 14);
        echo "<p>".$lon."</p>";
    } 
    echo "</div>"; 
} 
fclose ($f); 
?>