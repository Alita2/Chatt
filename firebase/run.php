<?php
error_reporting(-1);
ini_set('display_errors', 'On');
require_once __DIR__ . '/firebase.php';
require_once __DIR__ . '/push.php';
$payload = array();
$payload['team'] = 'India';
$payload['score'] = '5.6';
$firebase = new Firebase();
$push = new Push();
$title = $_GET['Title'];
$id = $_GET['ID'];
$message = $_GET['Message'];
$push->setTitle($title);
$push->setMessage($message);
$push->setImage('');
$push->setIsBackground(FALSE);
$push->setPayload($payload);
$json = '';
$response = '';
$json = $push->getPush();
$response = $firebase->send($id, $json);
?>