<?php
//session_start();
if (!isset($_SESSION['username'])){
header("Location:./");
}
//script tampilkan data
 $sql=" SELECT id,no_dokumen,no_rka,program,kegiatan,waktu_pelaksanaan,lokasi_kegiatan,sumber_dana,SPLIT_STR(capaian_program, '###', 1)capaian_program_1,SPLIT_STR(capaian_program, '###', 2)capaian_program_2,SPLIT_STR(masukan, '###', 1)masukan_1,SPLIT_STR(masukan, '###', 2)masukan_2,SPLIT_STR(keluaran, '###', 1)keluaran_1,SPLIT_STR(keluaran, '###', 2)keluaran_2,SPLIT_STR(hasil, '###', 1)hasil_1,SPLIT_STR(hasil, '###', 2)hasil_2,kelompok_sasaran_kegiatan,triwulan1,triwulan2,triwulan3,triwulan4,total_penarikan,add_time FROM renja  where no_dokumen = '".$_GET['no_dokumen']."' ";
 $result = $conn->query($sql);
 //echo "<br><br><br>". $sql;
 $row = $result->fetch_assoc();
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <ol class="breadcrumb breadcrumb-col-pink">
                    <li><a href="home.php?ref=home">Perencanaan</a></li>
                    <li><a href="home.php?ref=renja">RENJA</a></li>
                    <li class="active">View RENJA</li>
                </ol>
            </div>
            <!-- Body Copy -->
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Lihat Data Rencana Kerja
                            
                                <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5" align="right">
                                    <form action="page/generate_pdf.php" method="post">
                                        <input type="hidden" name="no_dokumen" value="<?php echo $row['no_dokumen'] ?>">
                                        <button name="submit" type="submit" class="btn btn-danger m-t-15 waves-effect">CETAK PDF</button>
                                    </form>
                                </div>
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" role="form" method="post">
                                <div class="body table-responsive">
                                    <table class="table table-bordered" id="table_logic">
                                        <thead>
                                            <tr>
                                                <td rowspan="3" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <img src="images/logo.png" alt="logo kabupaten sambas" height="150" width="120">
                                                        <input name="no_dokumen" type="hidden" value="<?php $thn=substr(date('Y'),3,1); echo $thn; echo date('mdHis')   ?>"  readonly required>
                                                    </div>
                                                </td>
                                                <td rowspan="2" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">DOKUMEN PELAKSANAAN ANGGARAN<br>SATUAN KERJA PERANGKAT DAERAH</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">NO RKA SKPD</label>
                                                    </div>
                                                </td>
                                                <td rowspan="2" colspan="3" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">FORMULIR DPA-SKPD 2.2.1</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <?php echo " <p><strong>$row[no_rka]</strong></p>";?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">PEMERINTAH KABUPATEN SAMBAS<br>TAHUN ANGGARAN 2018</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="17%">
                                                    <div class="form-control-label">
                                                        <label for="">URUSAN PEMERINTAHAN :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                    <div class="form-control-label">
                                                        <label for="">1.02. - KESEHATAN</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">ORGANISASI :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5">
                                                    <div class="form-control-label">
                                                        <label for="">1.02.01. - DINAS KESEHATAN</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Program :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <?php echo " <p>$row[program]</p>";?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <?php echo " <p>$row[kegiatan]</p>";?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Waktu Pelaksanaan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <?php echo " <p>$row[waktu_pelaksanaan]</p>";?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Lokasi Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <?php echo " <p>$row[lokasi_kegiatan]</p>";?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Sumber Dana :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <?php echo " <p>$row[sumber_dana]</p>";?>
                                                </td>
                                            </tr> 
                                            <!-- Indikator & Tolok Ukur Kinerja Belanja Langsung -->
                                            <tr>
                                                <th colspan="6">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Indikator & Tolok Ukur Kinerja Belanja Langsung</label>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Indikator</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Tolok Ukur Kinerja</label>
                                                    </div>
                                                </th>
                                                <th colspan="4">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Target Kinerja</label>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Capaian Program</label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <?php echo " <p>$row[capaian_program_1]</p>";?>
                                                </td>
                                                <td colspan="4" style="vertical-align: middle;">
                                                    <?php echo " <p>$row[capaian_program_2]</p>";?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Masukan</label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <?php echo " <p>$row[masukan_1]</p>";?>
                                                </td>
                                                <td colspan="4" style="vertical-align: middle;">
                                                    <?php echo " <p>$row[masukan_2]</p>";?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Keluaran</label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <?php echo " <p>$row[keluaran_1]</p>";?>
                                                </td>
                                                <td colspan="4" style="vertical-align: middle;">
                                                    <?php echo " <p>$row[keluaran_2]</p>";?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Hasil</label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <?php echo " <p>$row[hasil_1]</p>";?>
                                                </td>
                                                <td colspan="4" style="vertical-align: middle;">
                                                    <?php echo " <p>$row[hasil_2]</p>";?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Kelompok Sasaran Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                    <?php echo " <p>$row[kelompok_sasaran_kegiatan]</p>";?>
                                                </td>
                                            </tr>
                                            <!-- Rincian Dokumen -->
                                            <tr>
                                                <th colspan="6">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Rincian Dokumen Pelaksanaan Anggaran Belanja Langsung Menurut Program dan Per Kegiatan Satuan Kerja Perangkat Daerah</label>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Kode Rekening</label>
                                                    </div>
                                                </th>
                                                <th rowspan="2" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Uraian</label>
                                                    </div>
                                                </th>
                                                <th colspan="3" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Rincian Perhitungan</label>
                                                    </div>
                                                </th>
                                                <th rowspan="2" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Jumlah</label>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Volume</label>
                                                    </div>
                                                </th>
                                                <th style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Satuan</label>
                                                    </div>
                                                </th>
                                                <th style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Harga Satuan</label>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">1</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">2</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">3</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">4</label>
                                                    </div>
                                                </th>
                                                <th width="10%">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">5</label>
                                                    </div>
                                                </th>
                                                <th width="10%">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">6 = (3 x 5)</label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$sql=" SELECT id,no_dokumen,kode_rekening,uraian,volume,satuan,harga_satuan,jumlah,grup FROM renja_rincian WHERE no_dokumen = '".$_GET['no_dokumen']."' ";
$result = $conn->query($sql);
while ($row1 = $result->fetch_assoc()) {
?>
                                            <tr id="tr0">
                                                <?php 
                                                if ($row1['grup'] == 0) {
                                                    echo "
                                                        <td ><p>$row1[kode_rekening]</p></td>
                                                        <td ><p>$row1[uraian]</p></td>
                                                        <td ><p>$row1[volume]</p></td>
                                                        <td ><p style=text-align:center;>$row1[satuan]</p></td>
                                                        <td ><p style=text-align:right;>".number_format($row1[harga_satuan] , 2 ,'.',',')."</p></td>
                                                        <td ><p style=text-align:right;>".number_format($row1[jumlah] , 2 ,'.',',')."</p></td>
                                                        "; }
                                                elseif ($row1['grup'] == 1) {
                                                    echo "
                                                        <td style=vertical-align: middle;><p><strong>$row1[kode_rekening]</strong></p></td>
                                                        <td ><p><strong>$row1[uraian]</strong></p></td>
                                                        <td ><p><strong>$row1[volume]</strong></p></td>
                                                        <td ><p style=text-align:center;><strong>$row1[satuan]</strong></p></td>
                                                        <td ><p style=text-align:right;><strong>".number_format($row1[harga_satuan] , 2 ,'.',',')."</strong></p></td>
                                                        <td ><p style=text-align:right;><strong>".number_format($row1[jumlah] , 2 ,'.',',')."</strong></p></td>
                                                        "; } 
                                                
                                                 ?>
                                            </tr>
                                            <tr id="tr1"></tr>
<?php
if ($row1['grup'] == 0) {
$total_jumlah += $row1['jumlah'];
}
} ?>
                                        </tbody>
                                            <tr>
                                                <th colspan="5" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: right;">
                                                        <label for="">Jumlah</label>
                                                    </div>
                                                </th>
                                                <th style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <?php echo " <p style=\"text-align:right;\">".number_format($total_jumlah , 2 ,".",",")."</p>";?>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Rencana Penarikan Dana Per Triwulan</label>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan I</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <?php echo " <p style=\"text-align:right;\">".number_format($row[triwulan1] , 2 ,".",",")."</p>";?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan II</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <?php echo " <p style=\"text-align:right;\">".number_format($row[triwulan2] , 2 ,".",",")."</p>";?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan III</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <?php echo " <p style=\"text-align:right;\">".number_format($row[triwulan3] , 2 ,".",",")."</p>";?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan IV</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <?php echo " <p style=\"text-align:right;\">".number_format($row[triwulan4] , 2 ,".",",")."</p>";?>
                                                </th>
                                            </tr>
<!--                                             <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Jumlah</label>
                                                    </div>
                                                </th>
                                                <th style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <?php echo " <p style=\"text-align:right;\">$row[total_penarikan]</p>";?>
                                                    </div>
                                                </th>
                                            </tr> -->
                                            
                                    </table>
                                </div>
                            </form>
                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
        </div>
    </section>