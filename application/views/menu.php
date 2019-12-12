<div class="container-fluid mainbg" >
    <div class="row" style="padding-top:10px;">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light whitebg">
            <a class="navbar-brand" href="#"><b class="maincolor">PEMANTAU STATISTIK DIGIDIK</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item man">
                    <a class="nav-link" href="<?php echo site_url()?>umum">Umum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url()?>mapel">Mata Pelajaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url()?>ujian">Ujian</a>
                </li>
                </ul>
                <a href="<?php echo $logout_url;?>"><button class="btn btn-danger my-2 my-sm-0" type="button">Keluar</button></a>
            </div>
            </nav>
        </div>
    </div>
