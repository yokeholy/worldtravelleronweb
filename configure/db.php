<?php

require_once('const.php');

mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('Cannot connect to database, db.php');

mysql_select_db(DB_NAME) or die('Cannot select table, db.php');
?>