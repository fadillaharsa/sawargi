<?php include "html_first.php"; ?>
<title>Ketentuan Sawargi</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3" style="background-color:#76DAC3; padding:30px">
                <?php include "menu.php"; ?>
            <div>

            <div class="col-sm-9">
            	<form action="" method="post" enctype="multipart/form-data">
            		<input style="margin-bottom:10px" name="input_jumlah_dana" class="form-control" type = "text" value="" placeholder="Jumlah Dana">
            		<input style="margin-bottom:10px" name="input_jenis_dana" class="form-control" type = "text" value="" placeholder="Jenis Dana">
                    <input style="margin-bottom:10px" name="input_peruntukan_dana" class="form-control" type = "text" value="" placeholder="Peruntukan Dana">
            		<button type="submit" style="border:0px; background-color:#5CAEA5; margin-bottom: 15px; border-radius:10px " class="btn btn-primary btn-block">Submit</button>
            	</form>
            <div>

        </div>
    </div>
</body>
</html>