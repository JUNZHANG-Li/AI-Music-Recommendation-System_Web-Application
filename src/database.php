<?php
  $connection = mysqli_connect("db", "admin", "secretpassword", "song_recommendation_database");

  if (mysqli_connect_errno())
    echo 'Failed to connect to the MySQL server: '. mysqli_connect_error();
?>
