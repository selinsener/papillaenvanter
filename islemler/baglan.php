<?php 



$host="localhost"; //Host adınızı girin varsayılan olarak Localhosttur eğer bilginiz yoksa bu şekilde bırakın
$veritabani_ismi=""; //Veritabanı İsminiz
$kullanici_adi=""; //Veritabanı kullanıcı adınız
$sifre=""; //Kullanıcı şifreniz

try {
	$db=new PDO("mysql:host=$host;dbname=$veritabani_ismi;charset=utf8mb4",$kullanici_adi,$sifre);
	//echo "veritabanı bağlantısı başarılı";

	            $db->query("SET NAMES 'utf8mb4'");
                $db->query("SET CHARACTER SET 'utf8mb4'");
                $db->query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
}

catch (PDOExpception $e) {
	echo $e->getMessage();
}

?>