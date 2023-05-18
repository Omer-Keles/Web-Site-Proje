<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $ad = $_POST["ad"];
  $soyad = $_POST["soyad"];
  $email = $_POST["email"];
  $secenek = $_POST["secenek"];
  $mesaj = $_POST["mesaj"];

  echo "<h2>Gönderilen İletişim Bilgileri:</h2>";
  echo "<p><strong>Ad:</strong> $ad</p>";
  echo "<p><strong>Soyad:</strong> $soyad</p>";
  echo "<p><strong>E-posta:</strong> $email</p>";
  echo "<p><strong>İlgili Konu:</strong> $secenek</p>";
  echo "<p><strong>Mesaj:</strong> $mesaj</p>";
}
?>
