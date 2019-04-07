<?php
include "libs/koneksi.php";


$sql="DELETE FROM renja WHERE no_dokumen = '".$_GET['no_dokumen']."'";
$result = $conn->query($sql);
$sql="DELETE FROM renja_rincian_array WHERE no_dokumen = '".$_GET['no_dokumen']."'";
$result = $conn->query($sql);
$sql="DELETE FROM renja_rincian WHERE no_dokumen = '".$_GET['no_dokumen']."'";
$result = $conn->query($sql);
echo "<script language=javascript>alert('Data Berhasil Di Hapus');</script>";
echo "<script language=javascript>parent.location.href='home.php?ref=renja';</script>";
?>