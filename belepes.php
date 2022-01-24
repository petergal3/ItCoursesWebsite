 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css">
     <script src="tools.js"></script>
     <title>Login</title>
 </head>

 <body id="login-screen">
     <header>

         <?php
            if (isset($_GET["error"])) {
                $error = $_GET["error"];
                echo "<h2 class='error'>$error</h2>";
            }
            ?>

         <form action="hitelesites.php" id="login-form" method="post" onclick="shake()">
             <div class="imgcontainer">
                 <img src="avatar.png" alt="Avatar" class="avatar">
             </div>

             <div class="container">
                 <label for="uname"><b>Felhasználónév</b></label>
                 <input type="text" placeholder="Felhasználónév" name="uname" required>

                 <label for="psw"><b>Jelszó</b></label>
                 <input type="password" placeholder="Jelszó" name="psw" required>

                 <button type="submit" id="sbmt" name="sbmt">Bejelentkezés</button>
             </div>
         </form>

     </header>

 </body>

 </html>