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

    <title>Leírás</title>
</head>

<body>
    <header>

    </header>

    <main id="leiras-base">
        <h1>Üdvözöllek az oldalamon!</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis nostrum porro veritatis rerum error quas? Esse voluptate blanditiis non rerum explicabo quia asperiores commodi, distinctio dolore facere maiores nemo ab. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis recusandae earum dolores minus voluptatum quisquam beatae eaque, repudiandae eveniet temporibus debitis enim doloremque tempore tenetur esse fugiat repellat, ut odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fuga inventore reiciendis, dolores est molestias beatae cum sequi iure laudantium nisi consectetur porro illum quidem at soluta ipsum expedita esse.</p>
        <hr>
        <h2>Kurzusok</h2>
        <hr>

        <table id="deals">
            <tr>
                <th>Kurzus</th>
                <th>Időtartam</th>
                <th>Ár</th>
            </tr>
            <tr>
                <td>Szoftverfejlesztő</td>
                <td>2 év</td>
                <td>700 000 Ft</td>
            </tr>
            <tr>
                <td>Webfejlesztő</td>
                <td>6 hónap</td>
                <td>100 000 Ft</td>
            </tr>
            <tr>
                <td>VBA</td>
                <td>6 hónap</td>
                <td> 70 000Ft</td>
            </tr>
            <tr>
                <td>Rendszergazda</td>
                <td>2 év</td>
                <td>900 000 Ft</td>
            </tr>
            <tr>
                <td>Python</td>
                <td>4 hónap</td>
                <td>120 000 Ft</td>
            </tr>
            <tr>
                <td>Django</td>
                <td>4 hónap</td>
                <td>120 000 Ft</td>
            </tr>
            <tr>
                <td>Bevezetés az informatikába</td>
                <td>2 hónap</td>
                <td> 40 000 Ft</td>
            </tr>
            <tr>
                <td>Szoftver tervező informatikus</td>
                <td>3 év</td>
                <td>990 000 Ft</td>
            </tr>
            <tr>
                <td>C++</td>
                <td>9 hónap</td>
                <td>200 000 Ft</td>
            </tr>
        </table>

    </main>

</body>

</html>