<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <ol class="breadcrumb breadcrumb-col-pink">
                    <li class="active">Dashbord</li>
                </ol>
            </div
   
<?php
/*
                                    //script upload data
                                    if(isset($_POST['submit'])){
                                    $ekstensi_diperbolehkan = array('doc','docx','xls','xlsx','zip','rar','pdf');
                                    $nama = $_FILES['file']['name'];
                                    $x = explode('.', $nama);
                                    $ekstensi = strtolower(end($x));
                                    $ukuran = $_FILES['file']['size'];
                                    $file_tmp = $_FILES['file']['tmp_name'];    
                         
                                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                        if($ukuran < 10440700){          
                                            move_uploaded_file($file_tmp, 'folder_data/'.$nama);
                                            $nama_loc="folder_data/".$nama;
                                            $sql_up = "INSERT INTO upload (nama_file,lokasi) VALUES('$nama','$nama_loc')";
                                            $query_up = mysql_query($sql_up);
                                            if($query_up){
                                                echo 'FILE BERHASIL DI UPLOAD';
                                            }else{
                                                echo 'GAGAL MENGUPLOAD GAMBAR';
                                            }
                                        }else{
                                            echo 'UKURAN FILE TERLALU BESAR';
                                        }
                                    }else{
                                        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                                    }
                                echo "<script language=javascript>parent.location.href='home.php?ref=home';</script>";
                                }
                                //echo $sql_up;

                                //script tampilkan data
                                $sql=" SELECT a.nama_file,a.deskripsi,a.lokasi,a.date_upload,b.username as pengupload FROM upload a left join user b on (a.username_id)=b.id ORDER BY a.date_upload DESC";
                                $query=mysql_query($sql);
                                //echo "<br><br><br>". $sql;
*/
?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DASHBOARD
                            </h2>
<!--                             <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                            <!-- <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                <?php
                                ?>
                                <div class="row clearfix">
                                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                                        
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="file" type="file" class="form-control" placeholder="Upload Data">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-2">
                                        <button name="submit" type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Upload</button>
                                    </div>
                                </div>
                            </form> -->
                           <!-- <table id="data_table_advance" class="table table-bordered table-striped table-hover" >
                                <thead>
                                    <tr>
                                          <th width="10">No</th>
                                          <th>Nama File</th>
                                          <th>Deskripsi</th>
                                          <th width="160">Waktu Upload</th>
                                          <th>Pengupload</th>
                                          <th width="120">Action</th>
                                    </tr>
                                </thead>
                                <tbody> -->
<?php
// $no=1;
// $null="-";
// while ($row=mysql_fetch_assoc($query)) {

//$nilai3 = $row['jumlah3'];
//$jumlah_nilai3 += $nilai3;
?>
                                          <!-- <tr class="font-14"> -->
                                          <!-- <td><?php echo $no ?></td> -->
                                          <!-- <td><?php echo $row['nama_file'] ?></td> -->
                                          <!-- <td><?php echo $row['deskripsi'] ?></td> -->
                                          <!-- <td><?php echo $row['date_upload'] ?></td> -->
                                          <!-- <td><?php echo $row['pengupload'] ?></td> -->
                                            <!-- <td> -->
                                            <!-- <?php echo "<a href=$row[lokasi] type=\"button\" class=\"btn bg-green waves-effect\">" ?> -->
                                            <!-- <button href="<?php echo $row['lokasi'] ?>" type="button" class="btn bg-green waves-effect"> -->
                                            <!-- <i class="material-icons">file_download</i></a> -->
                                            <!-- </button> -->

                                            <?php // echo "<a title=\"Detail\" data-toggle=modal data-target=\".bs-example-modal-lg\" class=\"edit-record2 btn-u btn-u-sea\" data-id=$row[cid]><span class=\"fa fa-bars\"></span></a>" ?>
                                            <!-- <button type="button" class="btn bg-orange waves-effect"> -->
                                            <!-- <i class="material-icons">list</i> -->
                                            <!-- </button> -->
                                            <!-- </td> -->
                                        <!-- </tr> -->
<?php // $no++; } ?>
                                <!-- </tbody> -->
                                <!-- <tfoot>
                                            <tr>
                                            <td colspan="2" align="center"><strong>Jumlah Penyaluran</strong></td>
                                            <td colspan="2" align="right"><strong><?php echo "Rp ". number_format($jumlah_nilai3 , 0 ,".",".") ?></strong></td>
                                            </tr>
                                </tfoot> -->
                            <!-- </table> -->
                        </div>
                    </div>
                </div>
            </div>            
            <!-- #END# Body Copy -->
        </div>
            
        </div>
    </section>