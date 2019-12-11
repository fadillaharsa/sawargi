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

			<div class="container-fluid" style="margin-bottom: 200px">

				<div class="row centercontainer">
					<div class="col-sm-2"></div>
					<div class="col-sm-3" style="margin-top: 100px">
						<h1 align="center">PENDAFTARAN</h1>
						<div class="row">
							<div class="col-sm-12">
							<button style="background-color:#5CAEA5; margin-bottom: 15px;"  class="tablink " onclick="openPage('warga', this, '#008080')" id="defaultOpen">WARGA</button>
							<button style="background-color:#5CAEA5; margin-bottom: 15px;" class="tablink " onclick="openPage('pengurusrw', this, '#008080')">PENGURUS RW</button><br><br><br>

							<div id="warga" class="tabcontent" style="background-color:#76DAC3; border-radius:15px; padding-left:30px;padding-right:30px;padding-top:30px">
								<div id="form" style="color: white; padding-left:10px;padding-right:10px;padding-top:10px; margin-top: 10px;">					
						
									<form style="position: static" action="" method="post" enctype="multipart/form-data">					
			
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "text" class="form-control" name= input_nama_lengkap" value="" placeholder="Nama Lengkap">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "text" class="form-control" name="input_username"  value="" placeholder="Username">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "password" class="form-control" name="input_password"  value="" placeholder="Password">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "text" class="form-control" name="input_email"   value="" placeholder="Email">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "text" class="form-control" name="input_no_hp"   value="" placeholder="No. HP">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "text" class="form-control" name="input_token_rw" value="" placeholder="Token RW">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "text" class="form-control"  name="input_alamat"   value="" placeholder="Alamat">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "text" class="form-control" name="input_kode_pos"  value="" placeholder="Kode Pos">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" name="input_gambar" class="form-control" type= "file" size=40 value="" placeholder="Browse">
										<button type="submit" style="border:0px; background-color:#5CAEA5;border-radius:10px " class="btn btn-primary btn-block">DAFTAR</button>
									</form>
								</div>
							</div>	

							<div id="pengurusrw" class="tabcontent" style="background-color:#76DAC3; border-radius:15px; padding-left:30px;padding-right:30px;padding-top:30px">
								<div id="form" style="color: white; padding-left:10px;padding-right:10px;padding-top:10px; margin-top: 10px;">
	
									<form style="position: static" action="" method="post" enctype="multipart/form-data">
								
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" name="nama_lembaga" class="form-control" type = "text"  value="" placeholder="Nomor RW">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" name="username_lembaga" class="form-control" type = "text" value="" placeholder="Kode Pos">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" name="email_lembaga" class="form-control" type = "text"  value="" placeholder="Username">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" name="username_lembaga" class="form-control" type = "password" value="" placeholder="Password">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" name="username_lembaga" class="form-control" type = "text" value="" placeholder="Penanggung Jawab">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" name="username_lembaga" class="form-control" type = "text" value="" placeholder="Email Penanggung Jawab">
										<input style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" name="username_lembaga" class="form-control" type = "text"value="" placeholder="No. HP Penanggung Jawab">
										<button style="border:0px; background-color:#5CAEA5;  border-radius:10px " class="btn btn-primary btn-block" type="submit">DAFTAR</button>
									</form>	
								</div>
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