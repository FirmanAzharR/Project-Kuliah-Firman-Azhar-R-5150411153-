<?php 

include '../../config/koneksi.php';

	$id = $_POST['id'];


	//cek_jumlah detail
	$detail=mysqli_query($koneksi,"SELECT*FROM detail_transaksi WHERE id_transaksi = '$id'");
	$jml=$detail->num_rows;


	$update = mysqli_query($koneksi,"UPDATE transaksi SET status_ambil=1 WHERE id_transaksi='$id'");	

	if ($update) {
	$update_kandang=mysqli_query($koneksi,"UPDATE stok_kandang SET jumlah_stok = jumlah_stok+'$jml'");
		echo "berhasil";
	}
	else{
		echo "gagal";
	}

?>