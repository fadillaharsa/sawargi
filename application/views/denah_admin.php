<?php include "html_first.php"; ?>
<title>Ketentuan Sawargi</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3" style="background-color:#76DAC3">
                <?php include "menu_admin.php"; ?>
            </div>

            <div class="col-sm-9">
                <?php echo validation_errors(); if (isset($success)) echo '<p>'.$success.'</p>';?>
            	
                <?php if ($this->session->userdata('denah')==true){
                    echo"
                    <div class='row' style='padding:20px'>
                    <div class='col-sm-12'>
                    <p>Maaf, denah sudah diinput.</p> <a href='<?php echo site_url()?>denah_admin/hapus' class='btn btn-danger btn-sm' role='button'>Hapus Denah</a>
                    <br><br>
                    <p>Denah Kamu:</p><iframe src='".$denah."' width=100% height=100% frameborder='0' style='border:0;' allowfullscreen=''></iframe>
                    </div>
                    </div>";}
                    else{ echo"
                        <div class='form-group'>
                        <form action='".$aksi_input."' method='post' enctype='multipart/form-data'>
                            <input style='margin-bottom:10px' name='input_denah' class='form-control' type = 'text' placeholder='Link Denah'>
                            <button type='submit' style='border:0px; background-color:#5CAEA5; margin-bottom: 15px; border-radius:10px' class='btn btn-primary btn-block'>Submit</button>
                        </form>
                        </div>
                    ";
                }?>
            	<div class="form-group">
            	<form action="" method="post" enctype="multipart/form-data">
            		<input style="margin-bottom:10px" name="input_link_denah" class="form-control" type = "text" size=40 value="" placeholder="Link Denah">
            		<button type="submit" style="border:0px; background-color:#5CAEA5; margin-bottom: 15px; border-radius:10px " class="btn btn-primary btn-block">Submit</button>
            	</form>
            	</div>
            </div>
        </div>
    </div>
</body>
<?php include "html_last.php"; ?>
</html>