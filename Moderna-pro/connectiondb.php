<?php
$link=mysqli_connect("localhost","ourcleoc_cleoadmin","Cleo_12345_") or die (mysqli_error($link));
mysqli_select_db($link,"ourcleoc_cleo") or die (mysqli_error($link));

?> 