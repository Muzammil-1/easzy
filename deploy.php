<?php
// Set these dependant on your BB credentials
$username = 'Muzammil-1';
$password = 'Khuljat2s@1';
$branch = 'master';
// FTP Credentials
$ftp_host = 'files.000webhost.com';
$ftp_username = 'easzy';
$ftp_password = '10111111';
$ftp_path = "/public_html";
// Grab the data from BB's POST service and decode
$json = stripslashes($_GET['payload']);
$fp = fopen('deploy.txt', 'a');
	fwrite($fp, $json);
	fclose($fp);die;
$data = json_decode($json);
