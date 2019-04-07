<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','Legal');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan

$pdf->Image('../images/logo.png',12,17,-360);

include '../libs/koneksi.php';
//script tampilkan data
 $sql=" SELECT id,no_dokumen,no_rka,program,kegiatan,waktu_pelaksanaan,lokasi_kegiatan,sumber_dana,SPLIT_STR(capaian_program, '###', 1)capaian_program_1,SPLIT_STR(capaian_program, '###', 2)capaian_program_2,SPLIT_STR(masukan, '###', 1)masukan_1,SPLIT_STR(masukan, '###', 2)masukan_2,SPLIT_STR(keluaran, '###', 1)keluaran_1,SPLIT_STR(keluaran, '###', 2)keluaran_2,SPLIT_STR(hasil, '###', 1)hasil_1,SPLIT_STR(hasil, '###', 2)hasil_2,kelompok_sasaran_kegiatan,triwulan1,triwulan2,triwulan3,triwulan4,triwulan1+triwulan2+triwulan3+triwulan4 total_penarikan,add_time FROM renja  where no_dokumen = '".$_POST['no_dokumen']."' ";
 $result = $conn->query($sql);
 //echo "<br><br><br>". $sql;
 $row = $result->fetch_assoc();

$pdf->SetFont('Arial','',8);

$pdf->Cell(190,6,'Halaman : 1','',0,'R',0);
$pdf->Ln();

$pdf->SetFont('Arial','B',9);

$pdf->Cell(20,6,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
$pdf->Cell(80,6,'DOKUMEN PELAKSANAAN ANGGARAN','LTR',0,'C',0);
$pdf->Cell(40,6,'NO RKA SKPD',1,0,'C',0);
$pdf->Cell(50,6,'FORMULIR DPA-SKPD 2.2.1','LTR',0,'C',0);

$pdf->Ln();

$pdf->Cell(20,6,'','LR',0,'C',0);  // cell with left and right borders
$pdf->Cell(80,6,'SATUAN KERJA PERANGKAT DAERAH','LBR',0,'C',0);
$pdf->Cell(40,6,$row['no_rka'],'LBR',0,'C',0);
$pdf->Cell(50,6,' ','LBR',0,'L',0);

$pdf->Ln();

$pdf->Cell(20,6,'','LR',0,'L',0);   // empty cell with left,bottom, and right borders
$pdf->Cell(170,6,'PEMERINTAH KABUPATEN SAMBAS','LR',0,'C',0);


$pdf->Ln();

$pdf->Cell(20,6,'','LBR',0,'L',0);   // empty cell with left,bottom, and right borders
$pdf->Cell(170,6,'TAHUN ANGGARAN 2019','LBR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','',8);

$pdf->Cell(190,6,'URUSAN PEMERINTAH : 1.02. - KESEHATAN','LR',0,'L',0);
$pdf->Ln();

$pdf->Cell(190,6,'ORGANISASI : 1.02.01. - DINAS KESEHATAN','LBR',0,'L',0);
$pdf->Ln();


$pdf->Cell(190,6,'Program : '.$row['program'],'LR',0,'L',0);
$pdf->Ln();

$pdf->Cell(190,6,'Kegiatan : '.$row['kegiatan'],'LR',0,'L',0);
$pdf->Ln();

$pdf->Cell(190,6,'Waktu Pelaksanaan : '.$row['waktu_pelaksanaan'],'LR',0,'L',0);
$pdf->Ln();

$pdf->Cell(190,6,'Lokasi Kegiatan : '.$row['lokasi_kegiatan'],'LR',0,'L',0);
$pdf->Ln();

$pdf->Cell(190,6,'Sumber Dana : '.$row['sumber_dana'],'LBR',0,'L',0);
$pdf->Ln();

$pdf->SetFont('Arial','B',8);

$pdf->Cell(190,6,'Indikator & Tolok Ukur Kinerja Belanja Langsung','LBR',0,'C',0);
$pdf->Ln();

$pdf->Cell(30,6,'Indikator','LBR',0,'C',0);
$pdf->Cell(100,6,'Tolok Ukur Kinerja','LBR',0,'C',0);
$pdf->Cell(60,6,'Target Kinerja','LBR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','',7);

$pdf->Cell(30,8,'Capaian Program','LBR',0,'L',0);
$pdf->Cell(100,8,$row['capaian_program_1'],'LBR',0,'L',0);
$pdf->Cell(60,8,$row['capaian_program_2'],'LBR',0,'L',0);
$pdf->Ln();

$pdf->Cell(30,8,'Masukan','LBR',0,'L',0);
$pdf->Cell(100,8,$row['masukan_1'],'LBR',0,'L',0);
$pdf->Cell(60,8,$row['masukan_2'],'LBR',0,'L',0);
$pdf->Ln();

$pdf->Cell(30,8,'Keluaran','LBR',0,'L',0);
$pdf->Cell(100,8,$row['keluaran_1'],'LBR',0,'L',0);
$pdf->Cell(60,8,$row['keluaran_2'],'LBR',0,'L',0);
$pdf->Ln();

$pdf->Cell(30,8,'Hasil','LBR',0,'L',0);
$pdf->Cell(100,8,$row['hasil_1'],'LBR',0,'L',0);
$pdf->Cell(60,8,$row['hasil_2'],'LBR',0,'L',0);
$pdf->Ln();

$pdf->Cell(190,6,'Kelompok Sasaran Kegiatan : '.$row['kelompok_sasaran_kegiatan'],'LBR',0,'L',0);
$pdf->Ln();

$pdf->SetFont('Arial','B',8);

$pdf->Cell(190,5,'Rincian Dokumen Pelaksanaan Anggaran Belanja Langsung Menurut Program dan Per Kegiatan','LR',0,'C',0);
$pdf->Ln();

$pdf->Cell(190,5,'Satuan Kerja Perangkat Daerah','LBR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','B',7);

$pdf->Cell(30,6,'Kode Rekening','LR',0,'C',0);
$pdf->Cell(70,6,'Uraian','LR',0,'C',0);
$pdf->Cell(60,6,'Rincian Perhitungan','LBR',0,'C',0);
$pdf->Cell(30,6,'Jumlah','LR',0,'C',0);
$pdf->Ln();

$pdf->Cell(30,6,' ','LBR',0,'C',0);
$pdf->Cell(70,6,' ','LBR',0,'C',0);
$pdf->Cell(20,6,'Volume','LBR',0,'C',0);
$pdf->Cell(20,6,'Satuan','LBR',0,'C',0);
$pdf->Cell(20,6,'Harga Satuan','LBR',0,'C',0);
$pdf->Cell(30,6,' ','LBR',0,'C',0);
$pdf->Ln();

$pdf->Cell(30,6,'1','LBR',0,'C',0);
$pdf->Cell(70,6,'2','LBR',0,'C',0);
$pdf->Cell(20,6,'3','LBR',0,'C',0);
$pdf->Cell(20,6,'4','LBR',0,'C',0);
$pdf->Cell(20,6,'5','LBR',0,'C',0);
$pdf->Cell(30,6,'6 = (3 x 5)','LBR',0,'C',0);
$pdf->Ln();


$sql=" SELECT id,no_dokumen,kode_rekening,uraian,volume,satuan,harga_satuan,jumlah,grup FROM renja_rincian WHERE no_dokumen = '".$_POST['no_dokumen']."' ";
$result = $conn->query($sql);
while ($row1 = $result->fetch_assoc()) {

	if ($row1['grup'] == 0) {
	$pdf->SetFont('Arial','',7);

	$pdf->Cell(30,6,$row1['kode_rekening'],'LR',0,'L',0);
	$pdf->Cell(70,6,$row1['uraian'],'LR',0,'L',0);
	$pdf->Cell(20,6,$row1['volume'].'.00','LR',0,'C',0);
	$pdf->Cell(20,6,$row1['satuan'],'LR',0,'C',0);
	$pdf->Cell(20,6,number_format($row1['harga_satuan'] , 2 ,".",","),'LR',0,'R',0);
	$pdf->Cell(30,6,number_format($row1['jumlah'] , 2 ,".",","),'LR',0,'R',0);
	$pdf->Ln();
	}
	elseif ($row1['grup'] == 1) {
	$pdf->SetFont('Arial','B',7);

	$pdf->Cell(30,6,$row1['kode_rekening'],'LR',0,'L',0);
	$pdf->Cell(70,6,$row1['uraian'],'LR',0,'L',0);
	$pdf->Cell(20,6,$row1['volume'],'LR',0,'C',0);
	$pdf->Cell(20,6,$row1['satuan'],'LR',0,'C',0);
	$pdf->Cell(20,6,$row1['harga_satuan'] ,'LR',0,'R',0);
	$pdf->Cell(30,6,number_format($row1['jumlah'] , 2 ,".",","),'LR',0,'R',0);
	$pdf->Ln();
	}

}	

$sql=" SELECT id,no_dokumen,ROUND(SUM(jumlah),2)jumlah_total FROM renja_rincian WHERE grup = 0 AND no_dokumen = '".$_POST['no_dokumen']."' ";
$result = $conn->query($sql);
$row2 = $result->fetch_assoc();

$pdf->SetFont('Arial','B',8);

$pdf->Cell(160,6,'Jumlah','LTBR',0,'R',0);
$pdf->Cell(30,6,number_format($row2['jumlah_total'] , 2 ,".",","),'LTBR',0,'R',0);
$pdf->Ln();

$pdf->SetFont('Arial','',8);

$pdf->Cell(190,6,'Rencana Penarikan Dana per Triwulan','LBR',0,'L',0);
$pdf->Ln();

$pdf->SetFont('Arial','',7);

date_default_timezone_set('Asia/Jakarta');
$a = date('d');
$d = date('m'); 
$b = date('Y');
					if  ($d == "01") {
					$s = "Januari";
					}elseif  ($d == "02") {
					$s = "Februari";
					}elseif  ($d == "03") {
					$s = "Maret";
					}elseif  ($d == "04") {
					$s = "April";
					}elseif  ($d == "05") {
					$s = "Mei";
					}elseif  ($d == "06") {
					$s = "Juni";
					}elseif  ($d == "07") {
					$s = "July";
					}elseif  ($d == "08") {
					$s = "Agustus";
					}elseif  ($d == "09") {
					$s = "September";
					}elseif  ($d == "10") {
					$s = "Oktober";
					}elseif  ($d == "11") {
					$s = "November";
					}elseif  ($d == "12") {
					$s = "Desember";
					}

$pdf->Cell(70,5,' ','LR',0,'L',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(120,5,'Sambas, '.$a.' '.$s.' '.$b,'LR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','',7);
$pdf->Cell(70,5,' ','LR',0,'L',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(120,5,'Mengesahkan, ','LR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','',7);
$pdf->Cell(30,5,'Triwulan I ','L',0,'L',0);
$pdf->Cell(40,5,'Rp. '.number_format($row['triwulan1'] , 2 ,".",","),'R',0,'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(120,5,'Kepala Badan Keuangan Daerah','LR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','',7);
$pdf->Cell(30,5,'Triwulan II ','L',0,'L',0);
$pdf->Cell(40,5,'Rp. '.number_format($row['triwulan2'] , 2 ,".",","),'R',0,'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(120,5,'Selaku','LR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','',7);
$pdf->Cell(30,5,'Triwulan III ','L',0,'L',0);
$pdf->Cell(40,5,'Rp. '.number_format($row['triwulan3'] , 2 ,".",","),'R',0,'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(120,5,'Pejabat Pengelola Keuangan Daerah','LR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','',7);
$pdf->Cell(30,5,'Triwulan IV ','L',0,'L',0);
$pdf->Cell(40,5,'Rp. '.number_format($row['triwulan4'] , 2 ,".",","),'R',0,'L',0);
$pdf->Cell(120,5,' ','LR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','B',7);
$pdf->Cell(30,5,'Jumlah ','L',0,'L',0);
$pdf->Cell(40,5,'Rp. '.number_format($row['total_penarikan'] , 2 ,".",","),'R',0,'L',0);
$pdf->Cell(120,5,' ','LR',0,'C',0);
$pdf->Ln();

$pdf->Cell(70,5,' ','LR',0,'L',0);
$pdf->Cell(120,5,' ','LR',0,'C',0);
$pdf->Ln();

$pdf->Cell(70,5,' ','LR',0,'L',0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(120,5,'HERYANTO. S.Sos','LR',0,'C',0);
$pdf->Ln();

$pdf->SetFont('Arial','',7);
$pdf->Cell(70,5,' ','LR',0,'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(120,5,'Pembina Utama Muda (IV/c)','LR',0,'C',0);
$pdf->Ln();

$pdf->Cell(70,5,' ','LBR',0,'L',0);
$pdf->Cell(120,5,'NIP. 196711141988031006','LBR',0,'C',0);
$pdf->Ln();

// include 'koneksi.php';
// $mahasiswa = mysqli_query($connect, "select * from mahasiswa");
// while ($row = mysqli_fetch_array($mahasiswa)){
//     $pdf->Cell(20,6,$row['nim'],1,0);
//     $pdf->Cell(85,6,$row['nama_lengkap'],1,0);
//     $pdf->Cell(27,6,$row['no_hp'],1,0);
//     $pdf->Cell(25,6,$row['tanggal_lahir'],1,1); 
// }

$pdf->Output();
?>
