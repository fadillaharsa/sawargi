<?php include "html_first.php"; ?>
<title>Login Sawargi</title>
</head>

<body style="background: url(assets/images/sawargibg.png) no-repeat center center fixed;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;">

    <div class="container-fluid" style="margin-bottom: 200px" >
        <div class="row">
        <div class="col-sm-2"></div>
        	<div class="col-sm-3" style="margin-top: 200px">
					<h1>Sawargi</h1>
					<p>Sistem Informasi Warga Interaktif</p>
        		<div class="row">		
        			<div class="col-sm-12" style="background-color:#76DAC3; border-radius:15px; padding:30px">
			        	<form action="<?php echo $aksi_masuk;?>" method="post" enctype="multipart/form-data">					
			        		<div class="form-group">
									<input name="inputUsername" style="border:0px; background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "text" class="form-control"  value="" placeholder="Username">
									<input name="inputPassword" style="border:0px;  background-color:#95E9D1; margin-bottom: 15px; border-radius:10px" type = "password" class="form-control"  value="" placeholder="Password">
							</div>
								<button type="submit" style="border:0px; background-color:#5CAEA5; margin-bottom: 15px; border-radius:10px " class="btn btn-primary btn-block">MASUK</button>
								<p>Belum punya akun?</p>
								<a href="<?php echo site_url()?>daftar"  style="border:0px; background-color:#5CAEA5; border-radius:10px" class="btn btn-primary btn-block">BUAT AKUN</a>
						</form>	
				</div>
					</div>
        	</div>
        <div class="col-sm-7"></div>
        </div>
    </div>


  

</body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="">
		  <ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="<?php echo site_url()?>faq">FaQ</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="<?php echo site_url()?>kebijakan">Kebijakan</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="<?php echo site_url()?>ketentuan">Ketentuan</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="<?php echo site_url()?>tentang">Tentang</a>
		    </li>
			<li class="nav-item">
		      <a class="nav-link" href="<?php echo site_url()?>kontak">Kontak</a>
		    </li>
		  </ul>
		</nav>
</html>