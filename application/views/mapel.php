<?php include "html_first.php"; ?>
<title>Pantauan Umum Digidik Vidio</title>
</head>
<body>
<?php include "menu.php";?>
    <div class="row">
    	<div class="col-md-12">
			<br><h1 class="whitecolor" style="text-align:center;"><b>Statistik Mata Pelajaran</b></h1><br>
			<ul class="whitecolor">
                <li><p >Jumlah Mata Pelajaran				:    <?php echo $jumlahMapel ?></p></li>
                <li><p>Mata Pelajaran dengan Siswa Terbanyak:    <?php echo $namaSiswaTerbanyak ?> dengan <?php echo $jumlahTerbanyak ?> siswa.</p></li>
            </ul>		

			<div class="row">		
				<?php
				$c=1;
				$x = 1;
				foreach($listMapel->result() as $row){
					echo "<div class='col-md-3' style='padding:10px;'><div class='col-md-12 whitebg' style='padding:10px;border-radius:5px'>";
					echo "<p style='text-align:center;'><b>".$namaMapel[$x]."</b></p>";
					echo "<table style='width:100%;'><tr><td>";
					echo "ID Mapel : </td><td>".$row->course_id."</td></tr><tr><td>";
					echo "Jumlah Siswa: </td><td>".$jumlahUser[$x]."</td></tr><tr><td>";
					echo "Belum Mulai: </td><td>".$belumMulai[$x]."</td></tr><tr><td>";
					echo "20< Finish <50: </td><td>".$mulaiSatu[$x]."</td></tr><tr><td>";
					echo "50<= Finish <80: </td><td>".$mulaiDua[$x]."</td></tr><tr><td>";
					echo "Finish >=80: </td><td>".$mulaiTiga[$x]."</td></tr>";
					echo "</table></div></div>";
					$x++;
				}
				?>
			</div>
			<br>
		</div>
    </div>
</div>
<?php include "html_last.php"; ?>