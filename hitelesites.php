<?php
session_start();

$error = "";
$_SESSION["passed"] = false;

if (isset($_POST["sbmt"])) {
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    if ($username == "admin" && $password == "admin") {
        $_SESSION["passed"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("location:index.php");
        exit(0);
    } else {
        $error = "Nem megfelelő a felhasználónév vagy a jelszó";
    }
} else {
    $error = "Be kell jelentkezni!";
}

if ($error != "") {
    header("location:belepes.php?error=$error");
    exit(0);
}
