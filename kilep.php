<?php
session_start();
$_SESSION["passed"] = false;
header("location:belepes.php?uname=admin?psw=admin?;)");
session_destroy();
exit(0);
