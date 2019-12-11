<?php include "html_first.php"; ?>
<title>Login Sawargi</title>
</head>

<body style="background: url(assets/images/sawargibg.png) no-repeat center center fixed;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;">

 <script>
window.onload=function(){
document.getElementById("defaultOpen").click(); 	
}
</script>

			<div class="container">
				<div class="row centercontainer " align="center">
					<div class="col-sm-8">
						<h2 align="center" style="padding-top:20px">Daftar</h2>
						<p align="center" style="padding-buttom:20px">Daftarkan dirimu sebagai Mahasiswa untuk dapat mendaftar pada rekrutmen yang tersedia, atau sebagai Lemabaga Kemahasiswaan untuk dapat membuka rekrutmen anggota.</p>
					</div>
				</div>
				<div class="row centercontainer " align="center">
					<div class="col-sm-8">
					
						<button class="tablink" onclick="openPage('mahasiswa', this, '#008080')" id="defaultOpen">WARGA</button>
						<button class="tablink" onclick="openPage('lembagakemahasiswaan', this, '#008080')">PENGURUS RW</button>
						<div id="mahasiswa" class="tabcontent">
						<?php echo validation_errors(); if (isset($success)) echo '<p>'.$success.'</p>';?>
								<div id="form" style="color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">
								<form style="position: static" action="<?php echo $aksi_daftar_warga;?>" method="post" enctype="multipart/form-data">					
									<input style="margin-bottom:10px" name="input_nama_lengkap" class="rcorners" type = "text" size=40 value="" placeholder="Nama Lengkap"><br>
									<input style="margin-bottom:10px" name="input_username" class="rcorners" type = "text" size=40 value="" placeholder="Username"><br>
									<input style="margin-bottom:10px" name="input_password" class="rcorners" type = "password" size=40 value="" placeholder="Password"><br>
									<input style="margin-bottom:10px" name="input_email" class="rcorners" type = "text" size=40 value="" placeholder="Email"><br>
									<input style="margin-bottom:10px" name="input_hp" class="rcorners" type = "text" size=40 value="" placeholder="No. HP"><br>
									<input style="margin-bottom:10px" name="input_token" class="rcorners" type = "text" size=40 value="" placeholder="Token RW"><br>
									<input style="margin-bottom:10px" name="input_alamat" class="rcorners" type = "text" size=40 value="" placeholder="Alamat"><br>
									<input style="margin-bottom:10px" name="input_kode_pos" class="rcorners" type = "text" size=40 value="" placeholder="Kode Pos"><br>
									<button class="tombol tombolwarna2" type="submit">Daftar</button>
								</form>
							</div>
						</div>


						<div id="lembagakemahasiswaan" class="tabcontent">
						<?php echo validation_errors(); if (isset($success)) echo '<p>'.$success.'</p>';?>
							<div id="form" style="color: white; padding: 10px; margin-top: 10px;margin-bottom: 10px">

							<form style="position: static" action="<?php echo $aksi_daftar_rw;?>" method="post" enctype="multipart/form-data">
							
									<input style="margin-bottom:10px" name="input_nomor_rw" class="rcorners" type = "text"  value="" placeholder="Nomor RW"><br>
									<input style="margin-bottom:10px" name="input_kode_pos" class="rcorners" type = "text"  value="" placeholder="Kode Pos"><br>
									<input style="margin-bottom:10px" name="input_username_rw" class="rcorners" type = "text"  value="" placeholder="Username"><br>
									<input style="margin-bottom:10px" name="input_password_rw" class="rcorners" type = "password"  value="" placeholder="Password"><br>
									<input style="margin-bottom:10px" name="input_pj_rw" class="rcorners" type = "text" value="" placeholder="Penanggung Jawab"><br>
									<input style="margin-bottom:10px" name="input_email_pj" class="rcorners" type = "text"  value="" placeholder="Email Penanggung Jawab"><br>
									<input style="margin-bottom:10px" name="input_hp_pj" class="rcorners" type = "text"  value="" placeholder="No. HP Penanggung Jawab"><br>

							<button class="tombol tombolwarna2" type="submit">Daftar</button>
							</form>	
							</div>
						</div>
					</div>
				</div>
			</div>

        </div>
    </div>
</body>
<?php include "html_last.php"; ?>
</html>