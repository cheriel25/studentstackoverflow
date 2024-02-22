<?php
require "../check.php";
$title = 'Admin';

ob_start();
include '../templates/adminhome.html.php';
$output = ob_get_clean();
include '../templates/admin_layout.html.php';