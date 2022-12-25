
<?php
$sql = "SELECT * FROM jabatan";
//cara 1 langsung 
//$data_pegawai = $dbh->query($sql);

//cara 2 PDO
//menggunakan mekanisme prepare statement PDO
$ps = $dbh->prepare($sql);
$ps->execute();
$data_pegawai = $ps->fetchAll();

/*
foreach ($data_pegawai as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
?>

<!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white font-tertiary">Data Jabatan </h1>
      </div>
    </div>
  </div>
  <div class="layer-bg w-100">
    <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
  </div>
  <div class="layer" id="l2">
    <img src="images/illustrations/dots-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l3">
    <img src="images/illustrations/leaf-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l4">
    <img src="images/illustrations/dots-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l5">
    <img src="images/illustrations/leaf-yellow.png" alt="bg-shape">
  </div>
  <div class="layer" id="l6">
    <img src="images/illustrations/leaf-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l7">
    <img src="images/illustrations/dots-group-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l8">
    <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape">
  </div>
  <div class="layer" id="l9">
    <img src="images/illustrations/leaf-cyan-2.png" alt="bg-shape">
  </div>
   <!-- social icon -->
   <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
    <li class="mb-3"><a class="text-white" href="https://www.facebook.com/ryan.ramadhan.94009841"><i class="ti-facebook"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://www.instagram.com/rynrss_/"><i class="ti-instagram"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://github.com/RyanRamadhan11"><i class="ti-github"></i></a></li>
    <li class="mb-3"><a class="text-white" href="mailto:ramadhanryan676@gmail.com"><i class="ti-email"></i></a></li>
  </ul>
  <!-- /social icon -->
</section>
<!-- /hero area -->

<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Jabatan</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_pegawai as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['nama'] ?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>