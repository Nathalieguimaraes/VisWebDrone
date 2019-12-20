<?php
header('Access-Control-Allow-Origin: *');
ngOnInit() {
    this.uploader.onBeforeUploadItem = (item) => {
		item.withCredentials = false;
	}
}

    $file = "C:/xampp/htdocs/test/jQuery-File-Upload/server/execute_processing/out.txt";
    $f = fopen($file, "r");
    while ( $line = fgets($f, 1000) ) {
        print $line;
    }
?>