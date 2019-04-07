<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <ol class="breadcrumb breadcrumb-col-pink">
                    <li><a href="home.php?ref=home">Perencanaan</a></li>
                    <li class="active">RENJA</li>
                </ol>
            </div>
          
<?php
//session_start();
if (!isset($_SESSION['username'])){
header("Location:./");
}
//script tampilkan data
 $sql=" SELECT id,no_dokumen,program,kegiatan,waktu_pelaksanaan,add_time FROM renja ";
 $result = $conn->query($sql);
 //echo "<br><br><br>". $sql;

?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Rencana Kerja
                            </h2>
                        </div>
                        <div class="body">
                            <div><a href="home.php?ref=renja_tambah" type="button" class="btn btn-success waves-effect">
                             <b>+</b> Tambah Data Baru
                            </a></div><br>
                           <table id="data_table_advance" class="table table-bordered table-striped table-hover" >
                                <thead>
                                    <tr>
                                          <th width="10">No</th>
                                          <th>Kode Program</th>
                                          <th>Nama Program</th>
                                          <th>Kegiatan</th>
                                          <th>Waktu Pelaksanaan</th>
                                          <th>Add Time</th>
                                          <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
$no=1;
$null="-";
while ($row = $result->fetch_assoc()) {

$split = explode("-",$row['program']);
$split1 = explode("-",$row['kegiatan']);
?>
<tr class="font-14">
<td><?php echo $no ?></td>
<td><?php echo $split[0] ?></td>
<td><?php echo $split[1] ?></td>
<td><?php echo $split1[1] ?></td>
<td><?php echo $row['waktu_pelaksanaan'] ?></td>
<td><?php echo $row['add_time'] ?></td>
<td>
<div class="btn-group drop">
<button type="button" class="btn bg-pink waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
<i class="material-icons">list</i>
<span class="sr-only">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu">
<li><a href="home.php?ref=renja_view&no_dokumen=<?php echo $row[no_dokumen] ?>" class=" waves-effect waves-block">View</a></li>
<li><a href="home.php?ref=renja_edit&no_dokumen=<?php echo $row[no_dokumen] ?>" class=" waves-effect waves-block">Edit</a></li>
<li><a href="home.php?ref=renja_hapus&no_dokumen=<?php echo $row[no_dokumen] ?>" class=" waves-effect waves-block" onclick="if (!confirm('Hapus Data RENJA (<?php echo $row[program] ?>) ?')) return false;">Hapus</a></li>
</ul>
</div>                                      
</td>
</tr>
<?php $no++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>            
            <!-- #END# Body Copy -->
        </div>
            
        </div>
    </section>