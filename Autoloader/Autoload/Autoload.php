<?php 

    spl_autoload_register ('myAutoloader');

    function myAutoloader ($className) {

        $path = "../../";
        $extension = ".php";
        $fullPath = $path . $className . $extension;
        
        if (!file_exists($fullPath)) {
            
            echo "File not found.";
        }
        
        include_once $fullPath;
        
    }

?>