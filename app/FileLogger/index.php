<?php
require_once 'Log.Class.php';

$log = new Log("LogFileTest.txt");
$log->Write("This is test");
?>