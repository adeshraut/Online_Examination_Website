<?php

DEFINE ('DB_USER', 'quiz_user');
DEFINE ('DB_PSWD', 'coolio');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'quiz_user_database');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

?>