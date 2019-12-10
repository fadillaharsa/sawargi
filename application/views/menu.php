
  <h1>Sawargi</h1>
  <p>Sistem informasi warga interaktif</p>
  <ul class="nav flex-column">
  <li class="nav-item" style="background-color:#FFE384;">
      <div class="nav-link" href="<?php echo site_url()?>layanan"><?php echo $this->session->userdata('username_pengguna')?> <a href="#" class="btn btn-danger btn-sm" role="button">Link Button</a></div> 
    </li>
    <li class="nav-item" style="background-color: #5CAEA5;">
      <a class="nav-link" href="<?php echo site_url()?>layanan">Layanan Warga</a>
    </li>
    <li class="nav-item" style="background-color: #5CAEA5;">
      <a class="nav-link" href="<?php echo site_url()?>keamanan">Sistem Keamanan Rumah</a>
    </li>
    <li class="nav-item" style="background-color: #5CAEA5;">
      <a class="nav-link" href="<?php echo site_url()?>denah">Denah</a>
    </li>
    <li class="nav-item" style="background-color: #5CAEA5;">
      <a class="nav-link" href="<?php echo site_url()?>event">Kalender dan Event</a>
    </li>
    <li class="nav-item" style="background-color: #5CAEA5;">
      <a class="nav-link" href="<?php echo site_url()?>forum">Forum Warga</a>
    </li>
    <li class="nav-item" style="background-color: #5CAEA5;">
      <a class="nav-link" href="<?php echo site_url()?>biodata">Biodata Saya</a>
    </li>
  </ul>

