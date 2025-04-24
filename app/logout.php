<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
session_destroy();
// header("Location: /lkscloudbabel2024/app/components/index.php");
header("Location: /lkscloudbabel2024/login.php");
exit;
?>