<?php
if(!isset($_SESSION)) session_start();
//destroy session
session_destroy();
header('Location: index.php');