<?php

 if(isset($_POST['submit']))
{
	#input data ke table master_barang
    $sql="INSERT INTO renja (kode_rekening_program_id,kode_rekening_kegiatan_id,waktu_pelaksanaan,lokasi_kegiatan,sumber_dana,capaian_program,masukan,keluaran,hasil,kelompok_sasaran_kegiatan) VALUES ('".$_POST['program']."','".$_POST['kegiatan']."','".$_POST['waktu_pelaksanaan']."','".$_POST['lokasi_kegiatan']."','".$_POST['sumber_dana']."','".$_POST['capaian_program_1']."###".$_POST['capaian_program_2']."','".$_POST['masukan1']."###".$_POST['masukan2']."','".$_POST['keluaran1']."###".$_POST['keluaran2']."','".$_POST['hasil1']."###".$_POST['hasil2']."','".$_POST['kelompok_sasaran_kegiatan']."')";
    $conn->query($sql);
    //echo $sql;
 	echo "<script language=javascript>alert('Data Berhasil Di Tambahkan');</script>";
} 

?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <ol class="breadcrumb breadcrumb-col-pink">
                    <li><a href="home.php?ref=home">Perencanaan</a></li>
                    <li><a href="home.php?ref=renja">RENJA</a></li>
                    <li class="active">Tambah RENJA</li>
                </ol>
            </div>
            <!-- Body Copy -->
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Data Rencana Kerja
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" role="form" method="post">
                                <div class="body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td rowspan="3" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <img src="images/logo.png" alt="logo kabupaten sambas" height="150" width="120">
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
                                                <td rowspan="2" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">FORMULIR DPA-SKPD 2.2.1</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">1.02.1.02.01.01.02.5.2.</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
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
                                                <td colspan="3" style="vertical-align: middle;">
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
                                                <td colspan="3">
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
                                                <td colspan="3">
                                                    <select id="program" name="program" class="form-control" data-live-search="true"  required="">
                                                        <option value="" hidden=""></option>
                                                            <?php
                                                            $sql="SELECT id,kode_rekening,nama_rekening FROM kode_rekening_program";
                                                            $result = $conn->query($sql);
                                                            while ($row = $result->fetch_assoc()) {
                                                            echo "
                                                                <option value=\"$row[id]\">$row[kode_rekening] - $row[nama_rekening]</option>
                                                            "; } 
                                                            //$conn->close();
                                                            ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="3">
                                                    <select id="kegiatan" name="kegiatan" class="form-control" data-live-search="true"  required="">
                                                        <option value="" hidden=""></option>
                                                            <?php
                                                            $sql="SELECT id,kode_rekening,nama_rekening FROM kode_rekening_kegiatan";
                                                            $result = $conn->query($sql);
                                                            while ($row = $result->fetch_assoc()) {
                                                            echo "
                                                                <option value=\"$row[id]\">$row[kode_rekening] - $row[nama_rekening]</option>
                                                            "; } 
                                                            $conn->close();
                                                            ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Waktu Pelaksanaan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="3">
                                                    <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Lokasi Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="3">
                                                    <input type="text" id="lokasi_kegiatan" name="lokasi_kegiatan" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Sumber Dana :</label>
                                                    </div>
                                                </td>
                                                <td colspan="3">
                                                    <input type="text" id="sumber_dana" name="sumber_dana" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr> 
                                            <!-- Indikator & Tolok Ukur Kinerja Belanja Langsung -->
                                            <tr>
                                                <th colspan="4">
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
                                                <th colspan="2">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Target Kinerja</label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Capaian Program</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea id="capaian_program_1" name="capaian_program_1" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                                <td colspan="2">
                                                    <textarea id="capaian_program_2" name="capaian_program_2" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Masukan</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea id="masukan1" name="masukan1" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                                <td colspan="2">
                                                    <textarea id="masukan2" name="masukan2" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Keluaran</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea id="keluaran1" name="keluaran1" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                                <td colspan="2">
                                                    <textarea id="keluaran2" name="keluaran2" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Hasil</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <textarea id="hasil1" name="hasil1" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                                <td colspan="2">
                                                    <textarea id="hasil2" name="hasil2" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Kelompok Sasaran Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="3">
                                                    <textarea id="kelompok_sasaran_kegiatan" name="kelompok_sasaran_kegiatan"" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                            </tr>
                                            <!-- Rincian Dokumen -->
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-4 col-xs-offset-5">
                                        <button name="submit" type="submit" class="btn btn-primary m-t-15 waves-effect">TAMBAHKAN DATA RENCANA KERJA</button>
                                    </div>
                                </div>
                            </form>
                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
        </div>
    </section>