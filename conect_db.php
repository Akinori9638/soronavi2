<?php
$mysqli = new mysqli('us-cdbr-east-02.cleardb.com', 'b7cbfa5fe7fab2', '20c46f09', 'heroku_003f591c752be6a');
 if( $mysqli->connect_errno ) {
  echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
 }
$mysqli->set_charset('utf8');
 ?>
