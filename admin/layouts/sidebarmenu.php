<?php 

$pagenow    = dirname($_SERVER['PHP_SELF']); echo "<br>";
// $activePage = print_r($pagenow); echo "<br>";
// $hamboh     = $pagenow; echo $hamboh;
// if($activePage == "/perpus_masjid/admin/layouts") {echo "active";} else {echo "";}

?>
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li class="<?php if($pagenow == "/perpus_masjid/admin") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/perpus_masjid/admin">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="<?php if($pagenow === "/perpus_masjid/admin/anggota" OR $pagenow === "/perpus_masjid/admin/kartu_anggota" OR $pagenow === "/perpus_masjid/admin/pendaftaran") {echo "treeview active menu-open";} else {echo "treeview";}?>">
    <a href="http://localhost/perpus_masjid/admin">
      <i class="fa fa-users"></i>
      <span>Anggota</span>
      <span class="pull-right-container"></span>
    </a>
    <ul class="treeview-menu">
      <li class="<?php if($pagenow == "/perpus_masjid/admin/anggota") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/anggota"><i class="fa fa-circle-o"></i> Anggota</a></li>
      <li class="<?php if($pagenow == "/perpus_masjid/admin/kartu_anggota") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/kartu_anggota"><i class="fa fa-circle-o"></i> Kartu Anggota</a></li>
      <li class="<?php if($pagenow == "/perpus_masjid/admin/pendaftaran") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/pendaftaran"><i class="fa fa-circle-o"></i> Pendaftaran</a></li>
    </ul>
  </li>
  <li class="<?php if($pagenow === "/perpus_masjid/admin/buku" OR $pagenow === "/perpus_masjid/admin/rak_buku" OR $pagenow === "/perpus_masjid/admin/kategori_buku" OR $pagenow === "/perpus_masjid/admin/pinjam_buku") {echo "treeview active menu-open";} else {echo "treeview";}?>">
    <a href="http://localhost/perpus_masjid/admin">
      <i class="fa fa-book"></i>
      <span>Buku</span>
      <span class="pull-right-container"></span>
    </a>
    <ul class="treeview-menu">
      <li class="<?php if($pagenow === "/perpus_masjid/admin/buku") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/buku"><i class="fa fa-circle-o"></i> Buku</a></li>
      <li class="<?php if($pagenow === "/perpus_masjid/admin/rak_buku") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/rak_buku"><i class="fa fa-circle-o"></i> Rak Buku</a></li>
      <li class="<?php if($pagenow === "/perpus_masjid/admin/kategori_buku") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/kategori_buku"><i class="fa fa-circle-o"></i> Kategori Buku</a></li>
      <li class="<?php if($pagenow === "/perpus_masjid/admin/pinjam_buku") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/pinjam_buku"><i class="fa fa-circle-o"></i> Pinjam Buku</a></li>
    </ul>
  </li>
  <li class="<?php if($pagenow === "/perpus_masjid/admin/majalah" OR $pagenow === "/perpus_masjid/admin/rak_majalah" OR $pagenow === "/perpus_masjid/admin/kategori_majalah" OR $pagenow === "/perpus_masjid/admin/pinjam_majalah") {echo "treeview active menu-open";} else {echo "treeview";}?>">
    <a href="http://localhost/perpus_masjid/admin">
      <i class="fa fa-newspaper-o"></i>
      <span>Majalah</span>
      <span class="pull-right-container"></span>
    </a>
    <ul class="treeview-menu">
      <li class="<?php if($pagenow === "/perpus_masjid/admin/majalah") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/majalah"><i class="fa fa-circle-o"></i> Majalah</a></li>
      <li class="<?php if($pagenow === "/perpus_masjid/admin/rak_majalah") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/rak_majalah"><i class="fa fa-circle-o"></i> Rak Majalah</a></li>
      <li class="<?php if($pagenow === "/perpus_masjid/admin/kategori_majalah") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/kategori_majalah"><i class="fa fa-circle-o"></i> Kategori Majalah</a></li>
      <li class="<?php if($pagenow === "/perpus_masjid/admin/pinjam_majalah") {echo "active";} else {echo "";}?>"><a href="http://localhost/perpus_masjid/admin/pinjam_majalah"><i class="fa fa-circle-o"></i> Pinjam Majalah</a></li>
    </ul>
  </li>
  <li class="<?php if($pagenow == "/perpus_masjid/admin/penerbit") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/perpus_masjid/admin/penerbit">
      <i class="fa fa-plane"></i>
      <span>Penerbit</span>
    </a>
  </li>
  <li class="<?php if($pagenow == "/perpus_masjid/admin/penulis") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/perpus_masjid/admin/penulis">
      <i class="fa fa-pencil"></i>
      <span>Penulis</span>
    </a>
  </li>
  <li class="<?php if($pagenow == "/perpus_masjid/admin/petugas") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/perpus_masjid/admin/petugas">
      <i class="fa fa-user-secret"></i>
      <span>Petugas</span>
    </a>
  </li>
</ul>