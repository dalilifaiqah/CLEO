<?php
$link=mysqli_connect("localhost","admin1","admin1") or die (mysqli_error($link));
mysqli_select_db($link,"cleo") or die (mysqli_error($link));

?>