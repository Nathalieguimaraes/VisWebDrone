<?php

if(isset($_POST['ortofoto']) && isset($_POST['nuvempontos'])) {
    /*header('Content-Encoding: none;');*/
    set_time_limit(0);
    
    $copycoord = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/copy_coordsystem.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $copycoord . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
    sleep(1);
    
	$handle = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing1.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $handle . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
	sleep(1);
    
    $handle2 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing2.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle2 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);


    $handle3 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing3.py");

    if (ob_get_level() == 0) { 
        ob_start();
    }

    echo $handle3 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle4 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing4.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle4 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle5 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing5.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle5 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle6 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing6.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle6 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle7 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing7.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle7 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle8 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing8.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle8 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle9 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing9.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle9 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle10 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing10.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle10 . "<br />";

    echo str_pad('', 16300);


    ob_flush();
    flush();
    sleep(1);

    $handle11 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing11.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle11 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle12 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing12.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle12 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle12_1 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/generate_ortophotoMosaic_alpha.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle12_1 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    ob_end_flush();

    $handle13 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing13.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle13 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle14 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/create3dpointcloud.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle14 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    ob_end_flush();

    $handle15 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/gsconnection1.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $handle15 . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
    sleep(1);
    
    $handle16 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/gsconnection2.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $handle16 . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
	sleep(1);
    
} elseif (isset($_POST["ortofoto"])) {
    /*header('Content-Encoding: none;');*/

    set_time_limit(0);
    
    $copycoord = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/copy_coordsystem.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $copycoord . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
    sleep(1);
	
	$handle = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing1.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $handle . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
	sleep(1);
    
    $handle2 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing2.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle2 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);


    $handle3 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing3.py");

    if (ob_get_level() == 0) { 
        ob_start();
    }

    echo $handle3 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle4 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing4.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle4 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle5 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing5.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle5 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle6 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing6.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle6 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle7 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing7.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle7 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle8 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing8.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle8 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle9 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing9.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle9 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle10 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing10.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle10 . "<br />";

    echo str_pad('', 16300);


    ob_flush();
    flush();
    sleep(1);

    $handle11 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing11.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle11 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle12 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing12.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle12 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle12_1 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/generate_ortophotoMosaic_alpha.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle12_1 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    ob_end_flush();

    $handle15 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/gsconnection1.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $handle15 . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
    sleep(1);
    
    $handle16 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/gsconnection2.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $handle16 . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
	sleep(1);
    
} elseif (isset($_POST['nuvempontos'])) {
	/*header('Content-Encoding: none;');*/
    set_time_limit(0);
    
    $copycoord = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/copy_coordsystem.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $copycoord . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
    sleep(1);
	
	$handle = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing1.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $handle . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
	sleep(1);
    
    $handle2 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing2.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle2 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);


    $handle3 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing3.py");

    if (ob_get_level() == 0) { 
        ob_start();
    }

    echo $handle3 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle4 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing4.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle4 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle5 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing5.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle5 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle6 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing6.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle6 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle7 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing7.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle7 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle8 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing8.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle8 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle9 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing9.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle9 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle10 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing10.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle10 . "<br />";

    echo str_pad('', 16300);


    ob_flush();
    flush();
    sleep(1);

    $handle13 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/processing13.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle13 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle14 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/create3dpointcloud.py");

    if (ob_get_level() == 0) {        
        ob_start();
    }

    echo $handle14 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    ob_end_flush();

    $handle15 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/gsconnection1.py");
        
    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle15 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

    $handle16 = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/orthomap/gsconnection2.py");

    if (ob_get_level() == 0) {
        ob_start();
    }

    echo $handle16 . "<br />";

    echo str_pad('', 16300);

    ob_flush();
    flush();
    sleep(1);

} else {
    echo("Something went wrong!");
}

?>