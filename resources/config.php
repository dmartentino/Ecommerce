<?php

ob_start();

session_start();
//session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates\\front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates\\back");

defined("DB_HOST") ? null : define("DB_HOST", "localhost");//define database host

defined("DB_USER") ? null : define("DB_USER", "root");//change parameter user to the one assigned in phpmyadmin

defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


require_once("functions.php"); //includes functions.php anywhere this file is being included
require_once("cart.php");

?>
