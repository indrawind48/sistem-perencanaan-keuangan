<?php

 if(isset($_POST['submit']))
{
	#hapus ,
    $tri1 = str_replace(",","",$_POST['triwulan1']);
    $tri2 = str_replace(",","",$_POST['triwulan2']);
    $tri3 = str_replace(",","",$_POST['triwulan3']);
    $tri4 = str_replace(",","",$_POST['triwulan4']);

    #input data ke renja
    $sql="INSERT INTO renja (no_dokumen,no_rka,program,kegiatan,waktu_pelaksanaan,lokasi_kegiatan,sumber_dana,capaian_program,masukan,keluaran,hasil,kelompok_sasaran_kegiatan,triwulan1,triwulan2,triwulan3,triwulan4) VALUES ('".$_POST['no_dokumen']."','".$_POST['no_rka']."','".$_POST['program']."','".$_POST['kegiatan']."','".$_POST['waktu_pelaksanaan']."','".$_POST['lokasi_kegiatan']."','".$_POST['sumber_dana']."','".$_POST['capaian_program_1']."###".$_POST['capaian_program_2']."','".$_POST['masukan1']."###".$_POST['masukan2']."','".$_POST['keluaran1']."###".$_POST['keluaran2']."','".$_POST['hasil1']."###".$_POST['hasil2']."','".$_POST['kelompok_sasaran_kegiatan']."','".$tri1."','".$tri2."','".$tri3."','".$tri4."')";
    $conn->query($sql);
    //echo $sql;

    #hapus ,
    $hs = str_replace(",","",$_POST['harga_satuan']);
    $jm = str_replace(",","",$_POST['jumlah']);
    #input data rincian array
    $kode_rekening=implode("###",$_POST['kode_rekening']);
    $uraian=implode("###",$_POST['uraian']);
    $volume=implode("###",$_POST['volume']);
    $satuan=implode("###",$_POST['satuan']);
    $harga_satuan=implode("###",$hs);
    $jumlah=implode("###",$jm);
    $grup=implode("###",$_POST['grup']);

    $sql="INSERT INTO renja_rincian_array (no_dokumen,kode_rekening,uraian,volume,satuan,harga_satuan,jumlah,grup) VALUES ('".$_POST['no_dokumen']."','".$kode_rekening."','".$uraian."','".$volume."','".$satuan."','".$harga_satuan."','".$jumlah."','".$grup."') ";
    $conn->query($sql);

    #proses pemecahan data
    $sql="SELECT no_dokumen,kode_rekening,uraian,volume,satuan,harga_satuan,jumlah,grup FROM renja_rincian_array where no_dokumen='".$_POST['no_dokumen']."'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $no_dokumen = $row['no_dokumen'];
    $kode_rekening1 = explode('###',$row['kode_rekening']);
    $uraian1 = explode('###',$row['uraian']);
    $volume1 = explode('###',$row['volume']);
    $satuan1 = explode('###',$row['satuan']);
    $harga_satuan1 = explode('###',$row['harga_satuan']);
    $jumlah1 = explode('###',$row['jumlah']);
    $grup1=explode("###",$row['grup']);
    $indeks=0; 
    while($indeks < count($kode_rekening1)){ 
    $sql="INSERT INTO renja_rincian (no_dokumen,kode_rekening,uraian,volume,satuan,harga_satuan,jumlah,grup) values ('".$no_dokumen."','".$kode_rekening1[$indeks]."','".$uraian1[$indeks]."','".$volume1[$indeks]."','".$satuan1[$indeks]."','".$harga_satuan1[$indeks]."','".$jumlah1[$indeks]."','".$grup1[$indeks]."')";
    $conn->query($sql);
    $indeks++; 
    }}

 	//echo "<script language=javascript>alert('Data Berhasil Di Tambahkan');</script>";
    echo "<script language=javascript>parent.location.href='home.php?ref=renja_tambah';</script>";
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
                                                    <input type="text" id="no_rka" name="no_rka" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">PEMERINTAH KABUPATEN SAMBAS<br>TAHUN ANGGARAN 2019</label>
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
                                                <td colspan="5">
                                                    <input type="text" id="program" name="program" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5">
                                                    <input type="text" id="kegiatan" name="kegiatan" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Waktu Pelaksanaan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5">
                                                    <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Lokasi Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5">
                                                    <input type="text" id="lokasi_kegiatan" name="lokasi_kegiatan" class="form-control" style="border-radius: 0px;" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="">Sumber Dana :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5">
                                                    <input type="text" id="sumber_dana" name="sumber_dana" class="form-control" style="border-radius: 0px;">
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
                                                <td>
                                                    <textarea id="capaian_program_1" name="capaian_program_1" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                                <td colspan="4">
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
                                                <td colspan="4">
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
                                                <td colspan="4">
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
                                                <td colspan="4">
                                                    <textarea id="hasil2" name="hasil2" class="form-control" style="border-radius: 0px;" required=""></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-control-label">
                                                        <label for="" style="font-weight: normal;">Kelompok Sasaran Kegiatan :</label>
                                                    </div>
                                                </td>
                                                <td colspan="5">
                                                    <textarea id="kelompok_sasaran_kegiatan" name="kelompok_sasaran_kegiatan"" class="form-control" style="border-radius: 0px;" required=""></textarea>
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
                                                <th>
                                                    <div>
                                                        <button id="tambah_grup" type="button" class="btn bg-blue-grey waves-effect"><i class="material-icons">add</i></button>
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
                                                <th>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">5</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">6 = (3 x 5)</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div>
                                                        <button id="tambah" type="button" class="btn btn-warning waves-effect"><i class="material-icons">add</i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="tr0">
                                                <td style='background-color: #e0e0e0'><input id='grup' type='hidden' name='grup[]' value='1' class='form-control' style='border-radius: 0px;width:100%'><input id="kode_rekening0" type="text" name="kode_rekening[]" class="form-control" style=" border-radius: 0px;width:100%" ></td>
                                                <td style='background-color: #e0e0e0'><input id="uraian0" type="text" name="uraian[]" class="form-control" style=" border-radius: 0px;width:100%" required=""></td>
                                                <td style='background-color: #e0e0e0'><input id="volume0" type="number" name="volume[]" class="form-control" style=" border-radius: 0px;width:100%"></td>
                                                <td style='background-color: #e0e0e0'><input id="satuan0" type="text" name="satuan[]" class="form-control" style=" border-radius: 0px;width:100%" ></td>
                                                <td style='background-color: #e0e0e0'><input id="harga_satuan0" type="text" name="harga_satuan[]" class="form-control input_rincian" style=" border-radius: 0px;width:100%" ></td>
                                                <td style='background-color: #e0e0e0'><input id="jumlah0" type="text" name="jumlah[]" class="form-control input_rincian" style=" border-radius: 0px;width:100%" required=""></td>
                                                <td><button id="hapus" type="button" class="btn btn-danger waves-effect"><i class="material-icons">remove</i></button></td>
                                            </tr>
                                            <tr id="tr1"></tr>
                                        </tbody>
                                            <tr>
                                                <th colspan="5" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: right;">
                                                        <label for="">Jumlah</label>
                                                    </div>
                                                </th>
                                                <th style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <input id="total" type="text" name="total" class="form-control" style=" border-radius: 0px;width:100%" value="0" readonly="">
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
                                                    <input id="triwulan1" type="text" name="triwulan1" class="form-control inputrp" style=" border-radius: 0px;width:100%" required="">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan II</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <input id="triwulan2" type="text" name="triwulan2" class="form-control inputrp" style=" border-radius: 0px;width:100%" required="">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan III</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <input id="triwulan3" type="text" name="triwulan3" class="form-control inputrp" style=" border-radius: 0px;width:100%" required="">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <label for="">Triwulan IV</label>
                                                    </div>
                                                </th>
                                                <th>
                                                    <input id="triwulan4" type="text" name="triwulan4" class="form-control inputrp" style=" border-radius: 0px;width:100%" required="">
                                                </th>
                                            </tr>
                                            <!-- <tr>
                                                <th colspan="1" style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: center;">
                                                        <label for="">Jumlah</label>
                                                    </div>
                                                </th>
                                                <th style="vertical-align: middle;">
                                                    <div class="form-control-label" style="text-align: left;">
                                                        <input id="total_penarikan" type="text" name="total_penarikan" class="form-control" style=" border-radius: 0px;width:100%" value="0" readonly="">
                                                    </div>
                                                </th>
                                            </tr> -->
                                    </table>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                                        <button name="submit" type="submit" class="btn btn-success m-t-15 waves-effect">TAMBAHKAN DATA RENCANA KERJA</button>
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