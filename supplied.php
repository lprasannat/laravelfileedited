<?php
$link = mysqli_connect("localhost", "dbuser", 123, "lakshmi");
$result=mysqli_query($link,"SELECT name from uses WHERE Id=9");
echo mysqli_fetch_row($result);
?>