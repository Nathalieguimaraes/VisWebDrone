<?php
    
    $deletedata = shell_exec("python C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/delete_folder_files.py");
	
	if (ob_get_level() == 0) {
		ob_start();
	}
	
	echo $deletedata . "<br />";
	
	echo str_pad('', 16300);
    
	ob_flush();
	flush();
    sleep(1);
    
?>