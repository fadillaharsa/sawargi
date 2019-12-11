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
            	<form action="" method="post" enctype="multipart/form-data">
            		<input style="margin-bottom:10px" name="input_nama_event" class="form-control" type = "text"  value="" placeholder="Nama Event">
            		<input style="margin-bottom:10px" name="input_tanggal_event" class="form-control" type = "date"  value="" placeholder="Tanggal">
            		<input style="margin-bottom:10px" name="input_deksripsi_event" class="form-control" type = "text"  value="" placeholder="Deskripsi">
            		Input Gambar<br>
            		<input style="margin-bottom:10px" name="username_lembaga" class="form-control" type = "file" size=40 value="" placeholder="Gambar">
            		<button type="submit" style="border:0px; background-color:#5CAEA5; margin-bottom: 15px; border-radius:10px " class="btn btn-primary btn-block">Submit</button>
            	</form>
            </div>

        </div>
    </div>
</body>
<?php include "html_last.php"; ?>
</html>