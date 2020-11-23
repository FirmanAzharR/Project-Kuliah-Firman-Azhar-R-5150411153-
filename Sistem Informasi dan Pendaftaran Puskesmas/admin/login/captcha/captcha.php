<?php
//mengaktifkan session
session_start();
 
header("Content-type: image/png");
 
// menentukan session
$_SESSION["Captcha"]="";
 
// membuat gambar dengan menentukan ukuran
$gbr = imagecreate(130, 40);

//warna background captcha
imagecolorallocate($gbr,0, 153, 51);
 
// pengaturan font captcha
$color = imagecolorallocate($gbr, 253, 252, 252);
$font = "Allura-Regular.otf"; 
$ukuran_font = 20;
$posisi = 30;
// membuat nomor acak dan ditampilkan pada gambar
for($i=0;$i<=3;$i++) {
	// jumlah karakter
	$angka=rand(0, 9);
 
	$_SESSION["Captcha"].=$angka;
 
	$kemiringan= rand(20, 20);
 	
	imagettftext($gbr, $ukuran_font, $kemiringan, 20+25*$i, $posisi, $color, $font, $angka);	
}
//untuk membuat gambar 
imagepng($gbr); 
imagedestroy($gbr);
?>