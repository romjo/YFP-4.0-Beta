<?php
/*
Plugin Name: Anti-Injection
Plugin URI: 
Description: Block malicious URL queries
Author URI: 
Author: VW
Version: 1.0
*/
if (strpos($_SERVER['REQUEST_URI'], "eval(") ||
  strpos($_SERVER['REQUEST_URI'], "CONCAT") ||
  strpos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
  strpos($_SERVER['REQUEST_URI'], "base64")) 
  {
    @header("HTTP/1.1 400 Bad Request");
    @header("Status: 400 Bad Request");
    @header("Connection: Close");
    @exit;
  }
?>