<?php include "html_first.php"; ?>
<title>Pantauan Umum Digidik Vidio</title>
</head>
<body>
<?php include "menu.php"; ?>
    <br>
    <div class="row">
        <div class="col-md-12 whitecolor">
            <h1 style="text-align:center;"><b>Pantauan Umum Digidik Vidio</b></h1><br>
            <ul>
                <li><p>Jumlah Akun              :    <?php echo $jumlahSiswa ?></p></li>
                <li><p>Jumlah Modul Pelajaran   :    <?php echo $jumlahPelajaran ?></p></li>
                <li><p>Jumlah Konten            :    <?php echo $jumlahModul ?></p></li>
                <li><p>Jumlah Ujian             :    <?php echo $jumlahUjian ?></p></li>
                <li><p>Jumlah Komentar          :    <?php echo $jumlahKomentar ?></p></li>
                <li><p>Jumlah Review di Semua Modul         :    <?php echo $jumlahReview ?></p></li>
                <li><p>Rata-rata Rating di Semua Modul      :    <?php echo $jumlahRating ?></p></li>
            </ul>
        </div>
    </div>
    <br>
</div>
<?php include "html_last.php"; ?>