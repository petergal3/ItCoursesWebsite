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
    <script src="tools.js"></script>
    <title>Jelentkezes</title>
</head>

<body>
    <main>
        <div class="user">
            <header class="user__header">
                <img src="programmer.png" width="35%" alt="" />
                <?php
                if (!isset($_POST["sbmt"])) {
                    echo "<h1 id='jelentkezz' class='user__title'>Jelentkezz kurzusainkra!</h1>";
                } else {
                    echo "<h1 id='jelentkezz' class='user__title'>Köszönjük jelentkezésedet! Esetleg még egy kurzus?</h1>";
                }
                ?>

            </header>

            <form class="form" method="post" onsubmit="alert('Köszönjük a jelentkezésedet!')" onclick="shake()">
                <div class=" form__group">
                    <input type="text" placeholder="Név" id="name" class="form__input" required />
                </div>

                <div class="form__group">
                    <input type="email" placeholder="Email" class="form__input" required />
                </div>

                <div class="form__group">
                    <select name="kurzus" class="form__input" required>
                        <option value="base" class="form__input" id="choose-course">Válassz kurzust</option>
                        <option value="szoftver">Szoftverfejlesztő</option>
                        <option value="web">Webfejlesztő</option>
                        <option value="vba">VBA</option>
                        <option value="rendszergazda">Rendszergazda</option>
                        <option value="python">Python</option>
                        <option value="django">Django</option>
                        <option value="bevinfo">Bevezetés az informatikába</option>
                        <option value="tervezo">Szoftver tervező informatikus</option>
                        <option value="c++">C++</option>
                    </select>
                </div>

                <button class="btn" name="sbmt" type="submit">Jelentkezés</button>

            </form>
        </div>
    </main>

</body>

</html>