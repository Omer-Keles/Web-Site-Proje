<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>İletişim Formu Gönderildi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
        <p>Aşağıda, iletişim formundan gönderilen bilgiler yer almaktadır:</p>
		<ul>
			<li>Ad Soyad: <?php echo  $_POST['adSoyad']; ?></li>
			<li>E-Mail Adresi: <?php echo $_POST['email']; ?></li>
			<li>Konu: <?php echo $_POST['konu']; ?></li>
			<li>Mesaj: <?php echo $_POST['mesaj']; ?></li>
		</ul>
		<a href="iletisim_sayfasi.html">Yeni bir mesaj göndermek için tıklayın.</a>
	</div>
</body>
</html>
