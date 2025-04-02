<?php
$filename = $_REQUEST["filename"];//fetch filename
$data = file_get_contents($filename);//get file
echo $data;//deliver file
?>