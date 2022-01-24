<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}


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
    <title>Elérhetőségek</title>
</head>


<body>
    <main id="contact-base">
        <div>
            <h1>Keress fel minket!</h1>
            <hr width="30%" id="underline">
        </div>

        <div style="width: 50%; float:left;">
            <img src="location.png" alt="" width="15px" class="icon">
            <p style="margin-bottom: 3%;">Lorem ipsum dolor sit amet consectetu</p>
            <img src="email.png" alt="" width="20px" class="icon">
            <p style="margin-bottom: 3%;">Lorem ipsum dolor sit amet consectetu</p>


            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="270" id="gmap_canvas" src="https://maps.google.com/maps?q=budapest,%20alee&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a><br>
                    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>

                </div>
            </div>

        </div>

        <form id="contact-form" method="post" onsubmit="alert('Köszönjük a megkeresést! Amint tudunk válaszolunk :)')" onclick="shake()">
            <div class="">
                <div class="content">
                    <input type="text" placeholder="Név" id="name" class="" required />
                </div>

                <div class="content">
                    <input type="email" placeholder="Email" class="" required />
                </div>

                <div class="content">
                    <textarea name="" rows="6" cols="3" name="comment" form="usrform" placeholder="Üzeneted nekünk..."></textarea>
                </div>

                <div class="content">
                    <button class="" name="sbmt1" type="submit">Üzenet elküldése</button>
                </div>

        </form>
    </main>
</body>

</html>