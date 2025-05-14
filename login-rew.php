<?php
session_start();
$kullaniciadi=$_POST["username"];
$password=$_POST["password"];

echo $kullaniciadi."-".$password;

require("conn.php");

$baglanti = $baglan->query("SELECT email,password,fullname,tb_birim.birim_adi,birim_yoneticisi FROM tb_users INNER JOIN tb_birim ON tb_users.birim_id = tb_birim.birim_id WHERE tb_users.email=\"$kullaniciadi\" AND tb_users.password=\"$password\"");
        $row = mysqli_fetch_array($baglanti);
  
        if ($row['email'] == $kullaniciadi && $row['password'] == $password ){
          echo "Başarıyla giriş yapıldı. Hoş geldin, ".$row['email'];
          
          $_SESSION["kullanici"]=$row['fullname'];
          $_SESSION["birim"]=$row['birim_adi'];
          $_SESSION["email"]=$row['email'];
          $_SESSION["birimyonetici"]=$row['birim_yoneticisi'];
          header("Location:index.php");
        } else {
          echo "Giriş yapılamadı. Lütfen kullanıcı adınızı ve şifrenizi kontrol edin";
        }

?>