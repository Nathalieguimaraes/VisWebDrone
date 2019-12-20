<?php 
ini_set('display_errors','Off');
define('WP_DEBUG_DISPLAY', false);


$f = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f); 

$f2 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out2.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f2)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f2); 

$f3 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out3.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f3)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f3); 

$f4 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out4.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f4)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>";  
} 
fclose ($f4); 

$f5 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out5.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f5)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f5); 

$f6 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out6.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f6)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f6); 

$f7 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out7.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f7)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f7); 

$f8 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out8.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f8)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f8); 

$f9 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out9.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f9)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f9); 

$f10 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out10.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f10)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f10); 

$f11 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out11.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f11)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f11); 

$f12 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out12.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f12)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f12); 

$f13 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/out13.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f13)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f13); 

$f14 = fopen ("http://localhost/test/jQuery-File-Upload/server/php/files/3dpointcloud_results.txt", "r"); 
$ln= 0; 

while ($line= fgets ($f14)) { 
    echo "<div>"; 
    ++$ln; 
    $array = explode("    ",$line); 
    foreach($array as $value){ 
      echo "<p>".$value."</p>"; 
    } 
    echo "</div>"; 
} 
fclose ($f14); 

?>