<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Informasi Perencanaan, Pengelolaan dan Laporan Keuangan - DINAS KESEHATAN KABUPATEN SAMBAS</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red ls-closed">
<?php 
            include 'libs/koneksi.php';
            error_reporting(0);
            $pages_dir='page'; //value directory
            if(!empty($_GET['ref'])) { //kalo ga kosong ambil link page
            $pages = scandir($pages_dir, 0); //scan directory
            unset($pages[0],$pages[1]); // hapus index[0](.) , hapus index[1] (..)
            $ref = $_GET['ref']; //link page
            if(in_array($ref.'.php',$pages)) {  //pencocokan data link page dan directory
                include($pages_dir.'/'.$ref.'.php'); //excute
            } else {
            echo '<br><br><br><br><center><h1>Error 404 - NOT FOUND</h1><center>'; }
            } else {
            /*include('body.php'); */ }
?>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div> -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" >Sistem Informasi Perencanaan, Pengelolaan dan Laporan Keuangan</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="60" height="60" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo strtoupper($_SESSION[username]); ?></div>
                   <!--  <div class="email">tes@example.com</div> -->
                    <!-- <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Maintance</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Log</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <!-- <li class="active"> -->
                        <a href="home.php?ref=home">
                            <i class="material-icons">home</i>
                            <span>Dashbord</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Perencanaan</span>
                        </a>
                        <ul class="ml-menu">
                                    <li>
                                        <a href="home.php?ref=renja">RENJA</a>
                                    </li>
                                    
                        </ul>
                    </li>
                    <li>
                        <a href="home.php?ref=logout">
                            <i class="material-icons">exit_to_app</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 All Rights Reserved
                </div>
                <div class="version">
                    <b>Version: </b> 3.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>





    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Flot Charts Plugin Js -->
    <!--script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script-->

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

    <!-- Data Table Ajax Script -->
    <script type="text/javascript" src="plugins/data-table-ajax/jquery.dataTables-ajax.js"></script>

    <script> // tambah row dinamis
    var i=1;
    $("#tambah").click(function(){
        // var u = $("input[sz=jl]").size() + 1;
        // //$autosum('<div id="d">'+ isi +' - '+ isi2 +' - '+ isi3 + ' <input type="number" name="jumlah"> ' + '</div>').appendTo('#output');
        // $('.table tbody').append($(".table tbody tr:last").clone());
        // $('.table tbody tr:last td:first-child').html('<input type="text" style="width:100%" data="" class="txt" name="kode_rekening[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(2)').html('<input type="text" style="width:100%" data="" class="txt" name="uraian[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(3)').html('<input type="text" style="width:100%" data="" class="txt" name="volume[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(4)').html('<input type="text" style="width:100%" data="" class="txt" name="satuan[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(5)').html('<input type="text" style="width:100%" data="" class="txt" name="harga_satuan[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(6)').html('<input type="text" style="width:100%" data="" class="txt" name="jumlah[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:last-child').html('<button id="hapus" type="button" class="btn btn-danger waves-effect"><i class="material-icons">clear</i></button>');
        $('#tr'+i).html("<td><input id='grup"+i+"' type='hidden' name='grup[]' value='0' class='form-control' style='border-radius: 0px;width:100%'><input id='kode_rekening"+i+"' type='text' name='kode_rekening[]' class='form-control' style='border-radius: 0px;width:100%'></td><td><input id='uraian"+i+"' type='text' name='uraian[]' class='form-control' style=' border-radius: 0px;width:100%'></td><td><input id='volume"+i+"' type='number' name='volume[]' class='form-control' style=' border-radius: 0px;width:100%'></td><td><input id='satuan"+i+"' type='text' name='satuan[]' class='form-control' style=' border-radius: 0px;width:100%'></td><td><input id='harga_satuan"+i+"' type='text' name='harga_satuan[]' class='form-control input_rincian' style=' border-radius: 0px;width:100%'></td><td><input id='jumlah"+i+"' type='text' name='jumlah[]' class='form-control input_rincian input' style=' border-radius: 0px;width:100%'></td><td><button id='hapus' type='button' class='btn btn-danger waves-effect'><i class='material-icons'>remove</i></button></td>");
        $('#table_logic').append('<tr id="tr'+(i+1)+'"></tr>');
        i++; 
    });


//coba
    $("#tambah_grup").click(function(){
        // var u = $("input[sz=jl]").size() + 1;
        // //$autosum('<div id="d">'+ isi +' - '+ isi2 +' - '+ isi3 + ' <input type="number" name="jumlah"> ' + '</div>').appendTo('#output');
        // $('.table tbody').append($(".table tbody tr:last").clone());
        // $('.table tbody tr:last td:first-child').html('<input type="text" style="width:100%" data="" class="txt" name="kode_rekening[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(2)').html('<input type="text" style="width:100%" data="" class="txt" name="uraian[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(3)').html('<input type="text" style="width:100%" data="" class="txt" name="volume[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(4)').html('<input type="text" style="width:100%" data="" class="txt" name="satuan[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(5)').html('<input type="text" style="width:100%" data="" class="txt" name="harga_satuan[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:nth-child(6)').html('<input type="text" style="width:100%" data="" class="txt" name="jumlah[]" id="isi' + u + '" sz="jl">');
        // $('.table tbody tr:last td:last-child').html('<button id="hapus" type="button" class="btn btn-danger waves-effect"><i class="material-icons">clear</i></button>');
        $('#tr'+i).html("<td style='background-color: #e0e0e0'><input id='grup"+i+"' type='hidden' name='grup[]' value='1' class='form-control' style='border-radius: 0px;width:100%'><input id='kode_rekening"+i+"' type='text' name='kode_rekening[]' class='form-control' style='border-radius: 0px;width:100%'></td><td style='background-color: #e0e0e0'><input id='uraian"+i+"' type='text' name='uraian[]' class='form-control' style=' border-radius: 0px;width:100%'></td><td style='background-color: #e0e0e0'><input id='volume"+i+"' type='number' name='volume[]' class='form-control' style=' border-radius: 0px;width:100%'></td><td style='background-color: #e0e0e0'><input id='satuan"+i+"' type='text' name='satuan[]' class='form-control' style=' border-radius: 0px;width:100%'></td><td style='background-color: #e0e0e0'><input id='harga_satuan"+i+"' type='text' name='harga_satuan[]' class='form-control input_rincian' style=' border-radius: 0px;width:100%'></td><td style='background-color: #e0e0e0'><input id='jumlah"+i+"' type='text' name='jumlah[]' class='form-control input_rincian' style=' border-radius: 0px;width:100%'></td><td ><button id='hapus' type='button' class='btn btn-danger waves-effect'><i class='material-icons'>remove</i></button></td>");
        $('#table_logic').append('<tr id="tr'+(i+1)+'"></tr>');
        i++; 
    });



    $('body').on('click','#hapus',function(){
        if(i>1){
        $("#tr"+(i-1)).html('');
        i--;
        }
    });

        
        // $("body").on("click",'#harga_satuan'+i,function() {
        //     var u = i-2;
        //     $(this).keyup(function(){
        //         var sum = 0;
        //         //iterate through each textboxes and add the values
        //         $("#harga_satuan"+u).each(function() {
        //             var rp = this.value.replace("Rp ","");
        //             var re = rp.replace(/,/g,"");
        //             //add only if the value is number
        //             if(!isNaN(re) && re.length!=0) {
        //                     sum += parseFloat(re) * document.getElementById('volume'+u).value;
        //                 }
        //             });
        //         //.toFixed() method will roundoff the final sum to 2 decimal places
        //         //$("#sum").html(sum.toFixed(0));
        //         $("#jumlah"+u).val(sum);

        //         $('#jumlah'+u).inputmask("numeric", {
        //             radixPoint: ".",
        //             groupSeparator: ",",
        //             digits: 2,
        //             autoGroup: true,
        //             prefix: 'Rp ', //Space after $, this will not truncate the first character.
        //             rightAlign: false,
        //             oncleared: function () { self.Value(''); }
        //         });
        //     });
        // u++;
        // alert(u);
        // });
        
    </script>   
    
<!--     <script> //autosum penarikan dana
            $(".inputrp").each(function() {

                $(this).keyup(function(){
                    calculateSum();
                    //alert("asd");
                });
            });

            function calculateSum() {
                var sum = 0;
                //iterate through each textboxes and add the values
                $(".inputrp").each(function() {
                    var rp = this.value.replace("Rp ","");
                    var re = rp.replace(/,/g,"");
                    //add only if the value is number
                    if(!isNaN(re) && re.length!=0) {

                        sum += parseFloat(re);
                    }
                });
                //.toFixed() method will roundoff the final sum to 2 decimal places
                //$("#sum").html(sum.toFixed(0));
            $("#total_penarikan").val(sum);
            }

            $('#total_penarikan').inputmask("numeric", {
                radixPoint: ".",
                groupSeparator: ",",
                digits: 2,
                autoGroup: true,
                prefix: 'Rp ', //Space after $, this will not truncate the first character.
                rightAlign: false,
                oncleared: function () { self.Value(''); }
            });

    </script> -->

    <script> //autosum
            $("body").on("keyup",'.input',function() {
            //$(".input").each(function() {

                
                $(this).keyup(function(){
                    calculateSum();
                    //alert("asd");
                });
            });

            function calculateSum() {
                var sum = 0;
                //iterate through each textboxes and add the values
                $(".input").each(function() {
                    var rp = this.value.replace("Rp ","");
                    var re = rp.replace(/,/g,"");
                    //add only if the value is number
                    if(!isNaN(re) && re.length!=0) {

                        sum += parseFloat(re);
                    }
                });
                //.toFixed() method will roundoff the final sum to 2 decimal places
                //$("#sum").html(sum.toFixed(0));
            $("#total").val(sum);
            }

            $('#total').inputmask("numeric", {
                radixPoint: ".",
                groupSeparator: ",",
                digits: 2,
                autoGroup: true,
                prefix: '', //Space after $, this will not truncate the first character.
                rightAlign: false,
                oncleared: function () { self.Value(''); }
            });

    </script>

    <script> //masking Rp rincian dan penarikan dana
    $(document).click(function(){
        $('.inputrp').inputmask("numeric", {
                radixPoint: ".",
                groupSeparator: ",",
                digits: 2,
                autoGroup: true,
                prefix: '', //Space after $, this will not truncate the first character.
                rightAlign: false,
                oncleared: function () { self.Value(''); }
        });

        $('.input_rincian').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 2,
            autoGroup: true,
            prefix: '', //Space after $, this will not truncate the first character.
            rightAlign: false,
            oncleared: function () { self.Value(''); }
        });
    });
        
    </script>

    <!-- <script> //autosum rincian baris 0
        $("#harga_satuan0").each(function() {
            $(this).keyup(function(){
                calculate();
                //alert(i);
            });
        });

        function calculate() {
            var sum = 0;
            //iterate through each textboxes and add the values
            $("#harga_satuan0").each(function() {
                var rp = this.value.replace("Rp ","");
                var re = rp.replace(/,/g,"");
                //add only if the value is number
                if(!isNaN(re) && re.length!=0) {
                        sum += parseFloat(re) * document.getElementById('volume0').value;
                    }
                });
            //.toFixed() method will roundoff the final sum to 2 decimal places
            //$("#sum").html(sum.toFixed(0));
            $("#jumlah0").val(sum);
        }

        $('#jumlah0').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 2,
            autoGroup: true,
            prefix: '', //Space after $, this will not truncate the first character.
            rightAlign: false,
            oncleared: function () { self.Value(''); }
        });
    </script> -->

</body>

</html>