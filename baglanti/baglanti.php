<?php
	$sunucu="localhost";
	$veritabani="Ag_Odev2";
	$kullaniciAdi="root";
	$sifre="123456789"; 


	$baglan=mysql_connect($sunucu, $kullaniciAdi, $sifre);
	mysql_query("SET NAMES UTF8");

	if(!$baglan){
		echo "Bağlantı Hatası: ".mysql_errno();		
		echo "<br";
		exit();
	}
	$db=mysql_select_db($veritabani);

	if(!$db){
		echo "Veri Tabanı Hatası: ".mysql_errno();
		echo "<br>";
		echo "Veritabanı Bağlantı Bilgilerini /baglanti/baglanti.php Dosyasından Düzenleyebilirsiniz.";
		exit();
	}
?>