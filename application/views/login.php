<?php include "html_first.php"; ?>
<title>Login Pemantau Siswa Digidik Vidio</title>
</head>

<body>
    <div class="container-fluid mainbg" style="padding-top:130px; padding-bottom:123px;">
        <div class="row">
            <div class="col-md-12" style="padding-top:50px; padding-bottom:50px; text-align: center" >
                <a href="<?php echo site_url()?>login"><img src="<?php echo base_url()?>/assets/images/digidik.png" alt="Digidik" height="150px"><a/>
            </div>
            <br>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="text-align:center; background:white; border-radius:10px; margin:10px;">
                    <h1 class="maincolor" style="padding:10px;"><b>PEMANTAU STATISTIK DIGIDIK</b></h1>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form style="position: static" action="<?php echo $login_action;?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12" style="background:white; border-radius:10px; padding-top:10px; padding-bottom:10px; margin:10px;">

                    <?php if($this->session->userdata('login_message')){ ?>
							<div class="alert alert-danger" role="alert">
								<?php echo $this->session->userdata('login_message'); ?>
							</div>
						<?php }?>

                        <div class="row">
                            <div class="col-sm-3">Username:</div>
                            <div class="col-sm-9"><input name="inputUsername" type = "text" size=40 placeholder="Username" <?php if($this->session->userdata('login_valid')) { echo 'value="'.$this->session->userdata('login_valid').'"';}?> required autofocus></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">Password:</div>
                            <div class="col-sm-9"><input name="inputPassword" type = "password" size=40 value="" placeholder="Password" required> </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12" style="text-align:center;">
                        <button type="submit" class="btn btn-danger">
                            Masuk
                        </button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>