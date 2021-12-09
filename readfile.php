<?php
$username = $_POST['username'];
$myfile = fopen("hello.txt", "a") or die("Unable to open file!");
fwrite($myfile,$username);
fclose($myfile);

header('location:index.php');