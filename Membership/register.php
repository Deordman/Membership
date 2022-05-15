<?php 

    session_start();

    include 'connection/connection.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>
    
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Deneyim Yavrucuğum</title>

   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body style="background-color: gray">

    
    
    <div class="container">

        <?php

            if (@$_GET['status']=="registerok")
            {
                header("Refresh:2;login.php"); ?>

                <div class="alert alert-success">Kayıt Başarılı, Giriş Sayfasına Yönlendiriliyorsun</div>

                <?php
            }

            else if (@$_GET['status']=="registerno")
            {
                header("Refresh:5;register.php"); ?>

                <div class="alert alert-danger">Kayıt Başarısız, Tekrar Dene</div>

                <?php
            }

            else if (@$_GET['status']=="registerno1")
            {
                header("Refresh:5;register.php"); ?>

                <div class="alert alert-danger">Ah Lan..., Kullanıcı Adı Mevcut, Başka Bir Tane Dene</div>

                <?php 
            }

            else if (@$_GET['status']=="registerno2")
            {
                header("Refresh:5;register.php"); ?>

                <div class="alert alert-danger">Geçerli e-Mail Adresi Gir</div>

                <?php
            }

            else if (@$_GET['status']=="registerno3")
            {
                header("Refresh:5;register.php"); ?>

                <div class="alert alert-danger">Dayıcım, Neden Boş Alanları Doldurmaya Üşeniyon? :D</div>

                <?php
            }

            else if (@$_GET['status']=="registerno4")
            {
                header("Refresh:5;register.php"); ?>

                <div class="alert alert-danger">Bu Girdiğin e-Mail Adresi Kayıtlarda Var Knk</div>

                <?php
            }

            else if (@$_GET['status']=="registerno5")
            {
                header("Refresh:5;register.php"); ?>

                <div class="alert alert-danger">Şifren, En Az 8 Karakterden Oluşmalıdır</div>

                <?php 
            }?>

            <form action="process.php" method="POST">

                        <div class="form-group">
                            
                            <br><br><br><br><br><br> 

                            <label>Kullanıcı Adı</label>
      
                            <input type="text" class="form-control" name="un" placeholder="Kullanıcı Adı Oluştur">
    
                        </div> <br><br>

                        <div class="form-group">
      
                            <label>Şifre</label>
      
                            <input type="password" class="form-control" name="pw" placeholder="Şifre Oluştur">
      
                        </div> <br><br>

                        <div class="form-group">
      
                            <label>e-Mail</label>
      
                            <input type="mail" class="form-control" name="em" placeholder="e-Mail Adresini Gir">
      
                        </div> <br><br>

                        <div class="form-group">
      
                            <button type="submit" name="userregister" class="btn btn-primary">Kayıt Ol</button>
      
                        </div> 

                    </form>

                    <br><br><a href="login.php"><button type="submit" class="btn btn-success">Giriş Yap</button></a>

                    
                

       

    
    
    
    
    
</div>
    



















</body>

</html>