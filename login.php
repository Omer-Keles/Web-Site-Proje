<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Kullanıcı adı ve şifre değişkenleri tanımlanıyor
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Kullanıcı adı kontrol ediliyor
  if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    // Kullanıcı adı hatalıysa, login sayfasına geri döndürülür ve hata mesajı session değişkenine kaydedilir.
    $_SESSION["error_message"] = "Geçersiz kullanıcı adı veya şifre";
    header("Location: login_sayfasi.html");
    exit;
  } else {
    // Şifre kontrol ediliyor
    $numara = substr($username, 0, 10);
    if ($password === $numara) {
      // Giriş başarılıysa, hoşgeldin mesajı gösterilir
      echo '<div class="alert alert-success">Hoşgeldiniz ' . $numara . '!</div>';
    } else {
      // Şifre hatalıysa, login sayfasına geri döndürülür ve hata mesajı session değişkenine kaydedilir
      $_SESSION["error_message"] = "Geçersiz kullanıcı adı veya şifre";
      header("Location: login_sayfasi.html");
      exit;
    }
  }
}
?>
