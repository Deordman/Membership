<?php
    session_start();
    
    include 'connection/connection.php';
?>

<!DOCTYPE html>

<html lang="tr-TR">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Deneyim Yavrucuğum</title>

</head>

<body style="background-color: gray">

   

    <div class="container">

        <?php

        if (@$_GET['status']=="false")
        {?>

            <div class="alert alert-danger">Bilgileri Doğru Girdiğinden Emin Ol</div>

            <?php
        }

        else if (@$_GET['status']=="exit")
        {
            header("Refresh:2;login.php"); ?>

            <div class="alert alert-success">Çıkış Başarılı</div>
            
            <?php
        }

        if (isset($_SESSION['un']))
        {?>

            <br><br><br><br>

            <p>Merhaba <b><?php echo $_SESSION['un'] ?></b></p>

            <p>Biliyorum, Çok Saçma Sapan İşler Oldu. Adam Akıllı Site Olmadı. Ama Merak Etme, Sunucu Açıldığında Bambaşka Olacak :) Görüşmek Üzere <?php echo $_SESSION['un'] ?> </p>

            <br><br><br><br><br><br><br><br><br><br>

            <a href="exit.php"><button class="btn btn-danger">Çıkış Yap</button></a>

            <?php
        }

        else
        {?>

            <br><br><br><br><br><br>

            <form action="process.php" method="POST">

                <div class="form-group">

                    <label>Kullanıcı Adı</label>
                    
                    <input type="text" class="form-control" required name="un" placeholder="Kullanıcı Adını Gir">

                </div><br><br>

                <div class="form-group">

                    <label>Şifre</label>
                    
                    <input type="password" class="form-control" required name="pw" placeholder="Şifreni Gir">

                </div>

                <br><br><button type="submit" name="userlogin" class="btn btn-primary">Giriş Yap</button>

                </form>

                    <br><br><a href="register.php"><button type="submit" class="btn btn-success">Kayıt Ol</button></a>

            <?php
        }

        ?>

    </div>

</body>

</html>