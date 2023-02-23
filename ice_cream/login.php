<?php session_start(); ?> <!-- untuk masuk ke session file -->
<?php include('dbcon.php'); ?> <!-- untuk sambungan ke database -->
<html>
    <head>
        <title> login ice cream</title>
        <link rel="stylesheet" href="style02.css"> <!-- untuk link FIle Css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <!-- link ICON fontawesome -->
    </head>
    <body>
        <div class="container" > 
            <div class="card">
                <div class="inner-box" id="card">
                <div class="asu">
                    <h2>LOGIN</h2>
                    <form action="" method="POST">
                        <input type="email" class="input-box" name="email" id="email" placeholder="masukan email" autocomplete="off"  required>
                        <input type="password" class="input-box" name="pass" id="pass" placeholder="masukan password" required>
                        <button type="submit" class="submit-btn" name="submit-btn" id="submit-btn">Masuk</button>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">Daftar</button>
                    <li><a><input type="checkbox"><span>Ingatkan Saya</span></a></li>
                    <li><a href="">Lupa Password ?</a></li>
                </div>
                    <div class="card-back">
                        <h2>REGISTER</h2>
                            <form action="" method="POST">
                            <input type="text" class="input-box" name="user" id="user"  placeholder="masukan nama" autocomplete="off" required>
                            <input type="email" class="input-box" name="email" id="email" placeholder="masukan email" autocomplete="off" required>
                            <input type="password" class="input-box" name ="pass" id="pass" placeholder="masukan password" required>
                            <button type="submit" class="submit-tbl" name="submit" id="submit"">Daftar</button>
                            </form>
                        <button type="button" class="btn" onclick="openLogin()">Saya Sudah Punya Akun</button>
                    </div>
                </div>
            </div>
        </div>

            <script>

                    var card = document.getElementById("card");

                    function openLogin(){
                        card.style.transform = "rotateY(-180deg)";
                    }
                    function openRegister(){
                        card.style.transform = "rotateY(0deg)";
                    }

            </script>
            <?php include('register.php'); ?>
            <?php include('masuk.php'); ?>

    </body>
</html>