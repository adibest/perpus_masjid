<?php
// $url = $_SERVER["PHP_SELF"];
// $exp_url = explode($url,’/’);
// print_r($exp_url);
// a href http://localhost;
// if($exp_url[3]=hbcdb

// $path_3 = 'kategori';

$pagenow    = dirname($_SERVER['PHP_SELF']);
$basepage   = basename($_SERVER['PHP_SELF']);
// $activePage = print_r($pagenow);
// echo "<br>";
// $basiki     = print_r($basepage);
// echo "<br>";
// echo implode("/", print_r($pagenow));
// echo "<br>";


// /perpus_masjid/admin/layouts
// Array ( [0] => [1] => perpus_masjid [2] => admin [3] => layouts )
// class="if($activePage[2] == admin && $activePage[3] == null) {echo "active";} else {echo = "";}"

?>
 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php
        // if($path_3 == 'index.php'){
        //   echo "<li class='active'>";
        // } else {
        //   echo "<li>";
       ?>
          <li class="<?php if($activePage[2] == admin && $activePage[3] == null) {echo "active";} else {echo "";} //($activePage == 'http://localhost/perpus_masjid/admin/index.php') ? 'active':''; ?>">
          <a href="http://localhost/perpus_masjid/admin">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if($activePage[2] == admin && $activePage[3] == anggota) {echo "active";} else {echo "";}//($activePage == 'http://localhost/perpus_masjid/admin/anggota/index.php') ? 'active':''; ?>">
          <a href="http://localhost/perpus_masjid/admin/anggota">
            <i class="fa fa-pie-chart"></i>
            <span>Anggota</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/kartu_anggota">
            <i class="fa fa-user-plus"></i>
            <span>Kartu Anggota</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/pendaftaran">
            <i class="fa fa-user"></i>
            <span>Pendaftaran</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/buku">
            <i class="fa fa-book"></i>
            <span>Buku</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/rak_buku">
            <i class="fa fa-user"></i>
            <span>Rak Buku</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/kategori_buku">
            <i class="fa fa-user"></i>
            <span>Kategori Buku</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/pinjam_buku">
            <i class="fa fa-book"></i>
            <span>Pinjam Buku</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/majalah">
            <i class="fa fa-user-plus"></i>
            <span>Majalah</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/kategori_majalah">
            <i class="fa fa-book"></i>
            <span>Kategori Majalah</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/rak_majalah">
            <i class="fa fa-user"></i>
            <span>Rak Majalah</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/pinjam_majalah">
            <i class="fa fa-user-plus"></i>
            <span>Pinjam Majalah</span>
          </a>
        </li>
      <li>
          <a href="http://localhost/perpus_masjid/admin/penerbit">
            <i class="fa fa-book"></i>
            <span>Penerbit</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/penulis">
            <i class="fa fa-user-plus"></i>
            <span>Penulis</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/perpus_masjid/admin/petugas">
            <i class="fa fa-user"></i>
            <span>Petugas</span>
          </a>
        </li>
      </ul>