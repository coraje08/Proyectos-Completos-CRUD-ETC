<?php

$connection = mysqli_connect(
  'localhost', 'root', '', 'ajax_crud'
);

// for testing connection
#if($connection) {
#  echo 'database is connected';
#}

?>
