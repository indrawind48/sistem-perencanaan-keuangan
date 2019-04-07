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
                    <li class="active">Edit RENJA</li>
                </ol>
            </div>
            <!-- Body Copy -->
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Data Rencana Kerja
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
                                                        <label for="">NO DPA SKPD</label>
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
                                                    <input type="text" id="no_rka" name="no_rka" value="<?php echo $row[no_rka];?>" class="form-control" style="border-radius: 0px;" required="">
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
                                                     <input type="text" id="program" name="program" value="<?php echo $row[program];?>" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <input type="text" id="kegiatan" name="kegiatan" value="<?php echo $row[kegiatan];?>" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Waktu Pelaksanaan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" value="<?php echo $row[waktu_pelaksanaan];?>" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Lokasi Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <input type="text" id="lokasi_kegiatan" name="lokasi_kegiatan" value="<?php echo $row[lokasi_kegiatan];?>" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Sumber Dana :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                     <input type="text" id="sumber_dana" name="sumber_dana" value="<?php echo $row[sumber_dana];?>" class="form-control" style="border-radius: 0px;" required="">
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
                                                    <textarea id="capaian_program_1" name="capaian_program_1" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[capaian_program_1];?></textarea>
                                                </td>
                                                <td colspan="4" style="vertical-align: middle;">
                                                    <textarea id="capaian_program_2" name="capaian_program_2" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[capaian_program_2];?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Masukan</label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <textarea id="masukan_1" name="masukan_1" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[masukan_1];?></textarea>
                                                </td>
                                                <td colspan="4" style="vertical-align: middle;">
                                                    <textarea id="masukan_2" name="masukan_2" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[masukan_2];?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Keluaran</label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <textarea id="keluaran_1" name="keluaran_1" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[keluaran_1];?></textarea>
                                                </td>
                                                <td colspan="4" style="vertical-align: middle;">
                                                    <textarea id="keluaran_2" name="keluaran_2" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[keluaran_2];?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Hasil</label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <textarea id="hasil_1" name="hasil_1" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[hasil_1];?></textarea>
                                                </td>
                                                <td colspan="4" style="vertical-align: middle;">
                                                    <textarea id="hasil_2" name="hasil_2" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[hasil_2];?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Kelompok Sasaran Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5" style="vertical-align: middle;">
                                                    <textarea id="kelompok_sasaran_kegiatan" name="kelompok_sasaran_kegiatan" class="form-control" style="border-radius: 0px;" required=""><?php echo $row[kelompok_sasaran_kegiatan];?></textarea>
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
$sql=" SELECT id,no_dokumen,kode_rekening,uraian,volume,satuan,harga_satuan,jumlah FROM renja_rincian WHERE no_dokumen = '".$_GET['no_dokumen']."' ";
$result = $conn->query($sql);
while ($row1 = $result->fetch_assoc()) {
?>
                                            <tr id="tr0">
                                                <td style="vertical-align: middle;"><input id="kode_rekening0" type="text" name="kode_rekening[]" value="<?php echo $row1[kode_rekening];?>" class="form-control" style=" border-radius: 0px;width:100%" ></td>
                                                <td style="vertical-align: middle;"><input id="uraian0" type="text" name="uraian[]" value="<?php echo $row1[uraian];?>" class="form-control" style=" border-radius: 0px;width:100%" ></td>
                                                <td style="vertical-align: middle;"><input id="volume0" type="text" name="volume[]" value="<?php echo $row1[volume];?>" class="form-control" style=" border-radius: 0px;width:100%" ></td>
                                                <td style="vertical-align: middle;"><input id="satuan0" type="text" name="satuan[]" value="<?php echo $row1[satuan];?>" class="form-control" style=" border-radius: 0px;width:100%" ></td>
                                                <td style="vertical-align: middle;"><input id="harga_satuan0" type="text" name="harga_satuan[]" value="<?php echo $row1[harga_satuan];?>" class="form-control input_rincian" style=" border-radius: 0px;width:100%" ></td>
                                                <td style="vertical-align: middle;"><input id="jumlah0" type="text" name="jumlah[]" value="<?php echo $row1[jumlah];?>" class="form-control input_rincian" style=" border-radius: 0px;width:100%" ></td>
                                            </tr>
                                            <tr id="tr1"></tr>
<?php
$total_jumlah += $row1['jumlah'];
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
                                                        <input id="total" type="text" name="total" class="form-control" style=" border-radius: 0px;width:100%" value="<?php echo $total_jumlah; ?> " readonly="">
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
                                                    <input type="text" id="triwulan1" name="triwulan1" value="<?php echo $row[triwulan1];?>" class="form-control" style="border-radius: 0px;" required="">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan II</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <input type="text" id="triwulan2" name="triwulan2" value="<?php echo $row[triwulan2];?>" class="form-control" style="border-radius: 0px;" required="">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan III</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <input type="text" id="triwulan3" name="triwulan3" value="<?php echo $row[triwulan3];?>" class="form-control" style="border-radius: 0px;" required="">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan IV</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <input type="text" id="triwulan4" name="triwulan4" value="<?php echo $row[triwulan4];?>" class="form-control" style="border-radius: 0px;" required="">
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
                                                        <?php echo " <p style=\"text-align: right;\">$row[total_penarikan]</p>";?>
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