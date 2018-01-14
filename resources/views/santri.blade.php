<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Santri Aktif - Basis Data Al Mubarok</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/datatables.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="icon" href="img/1.png">
  <style type="text/css">
    th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        margin: 0 auto;
    } 
    div.container {
        width: 80%;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">BADAR v.0.1 - Basis Data Al Mubarok</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">PROFIL</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-child"></i>
            <span class="nav-link-text">SUMBER DAYA</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href=<?php echo url('ustadz') ?>>Ustadz</a>
            </li>
            <li>
              <a href=<?php echo url('santri') ?>>Santri Aktif</a>
            </li>
            <li>
              <a href=<?php echo url('alumni') ?>>Alumni</a>
            </li>
            <li>
              <a href=<?php echo url('keluaran') ?>>Keluaran</a>
            </li>
            <li>
              <a href=<?php echo url('ruangan') ?>>Ruangan</a>
            </li>          
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-bank"></i>
            <span class="nav-link-text">MADRASAH DINIYAH</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-file-archive-o"></i>
            <span class="nav-link-text">DOKUMEN</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-server"></i>
            <span class="nav-link-text">PRESENSI</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>            
            13 Robi'ul Akhir 1439
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-success d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-danger d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Cari ...">
              <span class="input-group-btn">
                <button class="btn btn-success" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">      
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#" class=" text-success">SUMBER DAYA</a>
        </li>
        <li class="breadcrumb-item active">SANTRI AKTIF</li>
      </ol>      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Santri Aktif</div>
        <div class="card-body">
          <div class="table-responsive">            
            <table class="table table-bordered" id="dataSantri" width="100%" cellspacing="0">              
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Santri</th>
                  <th>No Induk</th>
                  <th>Nama Ayah</th>
                  <th>Tgl Lahir</th>
                  <th>Jenjang</th>
                  <th>Alamat</th>
                  <th>Tgl Masuk</th>
                  <!-- <th data-formatter="TableActions">Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php 
                  for ($i=0; $i < count($santri); $i++) { 
                    echo "<tr><th scope=\"row\">".($i+1)."</th>";
                    echo "<td>".$santri[$i]->nama."</td>";
                    echo "<td>".$santri[$i]->noInduk."</td>";
                    echo "<td>".$santri[$i]->namaAyah."</td>";
                    echo "<td>".$santri[$i]->tglLahir."</td>";
                    echo "<td>".$santri[$i]->jenjang."</td>";
                    echo "<td>".$santri[$i]->jalan."</td>";
                    echo "<td>".$santri[$i]->tglMasuk."</td></tr>";
                    // echo '<td><a class="like" href="javascript:void(0)" title="Edit">'.'<i class="fa fa-pencil"></i>'.'</a></td></tr>';
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Pondok Pesantren Al Mubarok 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h5 class="modal-title" id="modalTambahLabel">Tambah Data Santri</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" role="form">
                <h4>Biodata Santri</h4><hr></hr>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertNamaSantri">Nama Lengkap</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="insertNamaSantri" placeholder="Nama Lengkap (sesuai Akta Kelahiran)"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertTmpLahir">Tempat, Tanggal Lahir</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertTmpLahir" placeholder="Tempat Lahir"/>
                  </div>
                  <div class="col-sm-6">
                      <input type="date" class="form-control form-control-sm" id="insertTglLahir" placeholder="Tanggal Lahir"/>                      
                  </div>
                </div>
                <label>Alamat Asal</label>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertJalan">- Jalan</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="insertJalan" placeholder="Jalan"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertRT">- RT / RW</label>
                  <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm" id="insertRT" placeholder="RT"/>
                  </div>
                  <div class="col-sm-2">
                      <input type="text" class="form-control form-control-sm" id="insertRW" placeholder="RW"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertDusun">- Dusun</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertDusun" placeholder="Dusun"/>
                  </div>
                  <label  class="col-sm-3 control-label" for="insertDesa">- Desa/Kelurahan</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertDesa" placeholder="Desa/Kelurahan"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertKecamatan">- Kecamatan</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertKecamatan" placeholder="Kecamatan"/>
                  </div>
                  <label  class="col-sm-3 control-label" for="insertKota">- Kota/Kabupaten</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertKota" placeholder="Kota/Kabupaten"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertTelp">Nomor Telepon/HP</label>
                  <div class="col-sm-9">
                      <input type="number" class="form-control form-control-sm" id="insertTelp" placeholder="Nomor Telepon/HP"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label" for="insertAsalSekolah">Asal Sekolah</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="insertAsalSekolah" placeholder="Asal Sekolah"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertJenjang">Jenjang Pendidikan</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="insertJenjang" placeholder="Jenjang Pendidikan"/>
                  </div>
                </div>                
                <div class="form-group row">
                  <label class="col-sm-3 control-label" for="insertTglMasuk">Tanggal Masuk</label>
                  <div class="col-sm-9">
                      <input type="date" class="form-control form-control-sm" id="insertTglMasuk" placeholder="Tanggal Masuk"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label" for="insertFoto">Foto</label>
                  <div class="col-sm-9">
                      <input type="file" class="form-control form-control-sm" id="insertFoto" placeholder="Foto"/>
                  </div>
                </div>
                <h4>Biodata Ayah</h4><hr></hr>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertNamaAyah">Nama Ayah</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="insertNamaAyah" placeholder="Nama Ayah"/>
                  </div>
                </div>                
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertThnLahirAyah">Tahun Lahir Ayah</label>
                  <div class="col-sm-3">
                      <input type="number" class="form-control form-control-sm" id="insertThnLahirAyah" placeholder="Tahun Lahir Ayah"/>
                  </div>
                  <label  class="col-sm-3 control-label" for="insertTelpAyah">Nomor Telepon Ayah</label>
                  <div class="col-sm-3">
                      <input type="number" class="form-control form-control-sm" id="insertTelpAyah" placeholder="Nomor Telepon Ayah"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertAlamatAyah">Alamat Ayah</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="insertAlamatAyah" placeholder="Alamat Ayah"/>
                  </div>
                </div>                
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertPekerjaanAyah">Pekerjaan Ayah</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertPekerjaanAyah" placeholder="Pekerjaan Ayah"/>
                  </div>
                  <label  class="col-sm-3 control-label" for="insertPendidikanAyah">Pendidikan Ayah</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertPendidikanAyah" placeholder="Pendidikan Ayah"/>
                  </div>
                </div>
                <h4>Biodata Ibu</h4><hr></hr>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertNamaIbu">Nama Ibu</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="insertNamaIbu" placeholder="Nama Ayah"/>
                  </div>
                </div>                
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertThnLahirIbu">Tahun Lahir Ibu</label>
                  <div class="col-sm-3">
                      <input type="number" class="form-control form-control-sm" id="insertThnLahirIbu" placeholder="Tahun Lahir Ibu"/>
                  </div>
                  <label  class="col-sm-3 control-label" for="insertTelpIbu">Nomor Telepon Ibu</label>
                  <div class="col-sm-3">
                      <input type="number" class="form-control form-control-sm" id="insertTelpIbu" placeholder="Nomor Telepon Ibu"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertAlamatIbu">Alamat Ibu</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="insertAlamatIbu" placeholder="Alamat Ibu"/>
                  </div>
                </div>                
                <div class="form-group row">
                  <label  class="col-sm-3 control-label" for="insertPekerjaanIbu">Pekerjaan Ibu</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertPekerjaanIbu" placeholder="Pekerjaan Ibu"/>
                  </div>
                  <label  class="col-sm-3 control-label" for="insertPendidikanIbu">Pendidikan Ibu</label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" id="insertPendidikanIbu" placeholder="Pendidikan Ibu"/>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button> -->
              <a class="btn btn-success" href="login.html">Simpan</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/datatables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>
<script>
  function TableActions (value, row, index) {
            return [
                '<a class="like" href="javascript:void(0)" title="Edit">',
                '<i class="glyphicon glyphicon-pencil"></i>',
                '</a> ',
                '<a class="danger remove" href="javascript:void(0)" data-visitorserial="'+row.visitor_id+'" data-visitornames="'+row.visitor_names+'" data-visitorid="'+row.visitor_number+'" data-toggle="modal" data-target="#VisitorDelete" title="Remove">',
                '<i class="glyphicon glyphicon-trash"></i>',
                '</a>'
            ].join('');
        }
    $(document).ready(function() {
      // var table = $('#dataSantri').DataTable();
      // table {        
      $('#dataSantri').removeAttr('width').DataTable( {
          // dom: '<B"top"f>rt<"bottom"ip>',
          dom: 
            "<'row'<'col-sm-3'l><'col-sm-6 text-center'f><'col-sm-3'B>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            scrollX:        true,
            scrollCollapse: true,
            "columnDefs": [
              { "width": "10px", "targets": 0 },
              { "width": "200px", "targets": 1 },
              { "width": "50px", "targets": 2 },
              { "width": "200px", "targets": 3 },
              { "width": "70px", "targets": 4 },
              { "width": "80px", "targets": 5 },
              { "width": "300px", "targets": 6 },
              { "width": "70px", "targets": 7 }
            ],
            fixedColumns: true,
        buttons: [
          {
            text:'Tambah',
            action: function ( e, dt, node, config ) {
                    $('#modalTambah').modal('toggle');
                }
          },{
            text:'Detail'
          },{
            text:'Hapus'
          }
        ]



      } );
   
      $('#dataSantri tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
              $(this).removeClass('selected');

          }
          else {
              $('#dataSantri').DataTable().$('tr.selected').removeClass('selected');
              $(this).addClass('selected');
              
          }
      } );
} );

</script>
</html>
