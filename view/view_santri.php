<?php 
	// include_once("../controller/c_sdm.php");
	// $sdm = new c_sdm();
	// $sdm->lihatSantri();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda | BADAR</title>
	<!-- <meta charset="UTF-8"> -->
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../style/bootstrap-theme.css">
	<link rel="icon" href="../img/3.png">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>

</head>
<body>
	<header>
		<div class="container-fluid">
			<img src="../img/6.png">	
		</div>
	</header>		
	<div class="col-md-2" id="home_menu">
		<div id="profil">
			<img src="../img/2.jpg">
		</div>
		<nav>
			<h4 id="menu_utama">MENU UTAMA</h4>
			<nav>
				<ul class="sidebar-menu">
					<li class="treeview">
						<a href="#"><img src="../img/icon/profil.png">PROFIL</a>
					</li>
					<li>
						<a href="#" onclick="showSdm()" id="sdm"><img src="../img/icon/sdm.png">SUMBER DAYA</a>
						<ul class="btn_sdm">
							<li><a href="#" id="sdm_1"><img src="../img/icon/ustadz.png">Ustadz</a></li>
							<li><a href="#" id="sdm_2"><img src="../img/icon/santri.png">Santri Aktif</a></li>
							<li><a href="#" id="sdm_3"><img src="../img/icon/alumni.png">Alumni</a></li>
							<li><a href="#" id="sdm_4"><img src="../img/icon/keluaran.png">Keluaran</a></li>
							<li><a href="#" id="sdm_5"><img src="../img/icon/gedung.png">Ruangan</a></li>
						</ul>
					</li>
					<li><a href="#"><img src="../img/icon/diniyah.png">MADRASAH DINIYAH</a></li>
					<li><a href="#"><img src="../img/icon/presensi.png">PRESENSI</a></li>
					<li><a href="#"><img src="../img/icon/dokumen.png">DOKUMEN</a></li>
				</ul>	
			</nav>
		</nav>
	</div>
	<div class="col-md-10" id="home_content">
		<table class="table table-striped table-bordered" id="tabel_santri">
			<h3>Data Santri</h3>	
			<form class="action_btn">
				<input type="text" placeholder="Cari Berdasarkan" id="txt_cari" class="form-control dataTables_filter"></input>				
				<select class="form-control" id="filter_cari">
					<option selected disable value="Pilih Kategori">Pilih Kategori</option>
					<option value="Nama">Nama</option>					
					<option value="Tempat Lahir">Tempat Lahir</option>
					<!-- <option>Tan</option> -->
				</select>
			</form>
			<thead>
				<tr>
					<th>Nomor</th>
					<th>No Induk</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($santri as $s) {
					echo "<tr>";
					echo "<td>$no</td>";
					echo "<td>$s[noInduk]</td>";
					echo "<td>$s[nama]</td>";
					echo "<td>$s[tmpLahir]</td>";
					echo "<td>$s[tglLahir]</td>";
					echo "</tr>";
					$no++;
				}
				;
				?>	
			</tbody>
		</table>	
	</div>
</body>
</html>
<script>
	// var x = document.getElementById("sdm_1");
	// x.style.display = none;
	// $(".table > tbody > tr").click(function cobaKlik(){});
	$(document).ready(function() {
    var table = $('#tabel_santri').DataTable();
 
    $('#tabel_santri tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
//     $('#button').click( function () {
//         table.row('.selected').remove().draw( false );
//     } );
} );
	
</script>
