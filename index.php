<?php
session_start();
if (!$_SESSION["passed"]) {
    header("location:belepes.php?error=Jelentkezz be");
    exit(0);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>GalPeter</title>
</head>

<body>
    <header id="topnav-header">

        <div class="topnav" id="topnav">
            <a <?php $class = "";
                if ($_SERVER["QUERY_STRING"] == "" || !isset($_GET["site"])) {
                    $class =  "active";
                } else {
                    $class = ($_GET["site"] == "leiras") ? "active" : "inactivate";
                }
                echo ("class = '$class'"); ?> href="?site=leiras" id=leiras>Leírás</a>
            <a <?php $class = "";
                if ($_SERVER["QUERY_STRING"] == "" || !isset($_GET["site"])) {
                    $class =  "inactive";
                } else {
                    $class = ($_GET["site"] == "jelentkezes") ? "active" : "inactivate";
                }
                echo ("class = '$class'"); ?> href="?site=jelentkezes" id=jelentekezes>Jelentkezés</a>
            <a <?php $class = "";
                if ($_SERVER["QUERY_STRING"] == "" || !isset($_GET["site"])) {
                    $class =  "inactive";
                } else {
                    $class = ($_GET["site"] == "partnerek") ? "active" : "inactivate";
                }
                echo ("class = '$class'"); ?> href="?site=partnerek" id="partnerek">Partnerek</a>
            <a <?php $class = "";
                if ($_SERVER["QUERY_STRING"] == "" || !isset($_GET["site"])) {
                    $class =  "inactive";
                } else {
                    $class = ($_GET["site"] == "elerhetosegek") ? "active" : "inactivate";
                }
                echo ("class = '$class'"); ?> href="?site=elerhetosegek" id="elerhetosegek">Elérhetőségek</a>
            <div class="topnav-right">
                <a class="" href="kilep.php" id=kilep>Kilépés</a>
            </div>

        </div>
    </header>

    <article>
        <?php
        if ($_SERVER["QUERY_STRING"] != "" && isset($_GET["site"])) {
            $query = $_GET["site"];
            $inc = "";
            switch ($query) {
                case "leiras":
                    $inc = "leiras.inc.php";
                    break;
                case "jelentkezes":
                    $inc = "jelentkezes.inc.php";
                    break;
                case "partnerek":
                    $inc = "partnerek.inc.php";
                    break;
                case "elerhetosegek":
                    $inc = "elerhetosegek.inc.php";
                    break;
                default:
                    $inc = "leiras.inc.php";
                    break;
            }
            include($inc);
        } else {
            $inc = "leiras.inc.php";
            include($inc);
        }
        ?>
    </article>

    <footer>

    </footer>

</body>

</html>