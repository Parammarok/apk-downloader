<?php

set_time_limit(0);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ignore_user_abort(true);
ini_set('default_socket_timeout', 6000);
error_reporting(E_ALL);
ini_set("memory_limit", "4500M");


$directoryName = 'files';
//Check if the directory already exists.
if(!is_dir($directoryName)){
    //Directory does not exist, so lets create it.
    mkdir($directoryName, 0777);
}


$id = $_GET['id'];




$dlcmd = "make download app={$id}";
$output = exec($dlcmd);
echo $output;
exit;


?>
