<?php

if(!@mysql_connect('localhost', 'root', '') || !@mysql_select_db('ntpc'))
die(mysql_error());

?>