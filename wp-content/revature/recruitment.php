<?php

require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/wp-load.php');

$url = 'https://8y1ub2vjek.execute-api.us-east-1.amazonaws.com/prod/ResumePush';

$fileName = substr(strrchr($_FILES['ResumeUpload']['name'],'.'),0);




$data = array(
	'key' => '245583662863Rk863369',
	'person' => $_POST['FirstName'].' '.$_POST['LastName'],
	'filename' => $fileName,
	'file' => $_POST['FileBase64']
);

$json = json_encode($data);
$args = array(
	'header'=> array('Content-Type' => 'application/json'),
	'body' => $json,
	'method' => 'POST',
	'timeout' => 45
);


$response = wp_remote_post($url, $args);

$responseBody = utf8_encode($response['body']);

$body = json_decode($responseBody);

$bodyArray = (array)$body;

print_r($bodyArray['link']);

?>