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
    <title>Partnerek</title>
</head>

<body>
    <main id="partners-base">

        <h1>Nagyon büszkék vagyunk partnereinkre! Felkeltettük érdeklődését? Legyen Ön cége is partner!</h1>

        <div class="flip-card">

            <div class="flip-card-inner">

                <div class="flip-card-front">
                    <img src="ruander1.png" height="110%" width="100%" alt="">
                </div>

                <div class="flip-card-back">
                    <h1>Ruander</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <a style="font-size: 20px;" href="https://www.ruander.hu/">Bővebb indormáció...</a>
                </div>
            </div>

        </div>

        <div class="flip-card">

            <div class="flip-card-inner">

                <div class="flip-card-front">
                    <img src="tesla.png" height="110%" width="100%" alt="">
                </div>

                <div class="flip-card-back">
                    <h1>Tesla</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <a style="font-size: 20px;" href="https://www.tesla.com/">Bővebb indormáció...</a>
                </div>
            </div>

        </div>

        <div class="flip-card">

            <div class="flip-card-inner">

                <div class="flip-card-front">
                    <img src="bitcoin.jpg" height="110%" width="100%" alt="">
                </div>

                <div class="flip-card-back">
                    <h1>Bitcoin</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <a style="font-size: 20px;" href="https://www.bitcoin.com/">Bővebb indormáció...</a>
                </div>
            </div>

        </div>

        <div class="flip-card">

            <div class="flip-card-inner">

                <div class="flip-card-front">
                    <img src="4ig.png" height="110%" width="100%" alt="">
                </div>

                <div class="flip-card-back">
                    <h1>4IG</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <a style="font-size: 20px;" href="https://www.4ig.hu/">Bővebb indormáció...</a>
                </div>
            </div>

        </div>

        <div class="flip-card">

            <div class="flip-card-inner">

                <div class="flip-card-front">
                    <img src="google.png" height="110%" width="100%" alt="">
                </div>

                <div class="flip-card-back">
                    <h1>Google</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    <a style="font-size: 20px;" href="https://www.google.com/">Bővebb indormáció...</a>
                </div>
            </div>

        </div>


    </main>
</body>

</html>