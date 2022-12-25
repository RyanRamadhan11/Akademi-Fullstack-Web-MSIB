<?php

$id = $_REQUEST['id'];
//ciptakan object dari class Pegawai
$model = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai
$pegawai = $model->getPegawai($id); 
/*
foreach ($data_pegawai as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
?>


<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Pegawai Details</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                    <li class="breadcrumb-item active">Pegawai Details</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->


<section class="section single-speaker">
    <div class="container">
        <div class="block">
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-md-center">
                    <div class="image-block">
                        <img src="images/speakers/<?= $pegawai['foto'] ?>" class="img-fluid" alt="speaker">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 align-self-center">
                    <div class="content-block">
                        <div class="name">
                            <h3><?= $pegawai['nama'] ?></h3>
                        </div>
                        <div class="profession">
                            <p><?= $pegawai['jab'] ?></p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <ul class="mr-1">
                                <li>Divisi: <?= $pegawai['bagian'] ?></li>
                                <li>Gender: <?= $pegawai['gender'] ?></li>
                                <li>Tempat Lahir: <?= $pegawai['tmp_lahir'] ?></li>
                                <li>Tanggal Lahir: <?= $pegawai['tgl_lahir'] ?></li>
                                <li>Alamat: <?= $pegawai['alamat'] ?></li>
                            </ul>
                        </div>
                        <!-- <div class="social-profiles">
                            <h5>Social Profiles</h5>
                            <ul class="list-inline social-list">
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="block-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="personal-info">
                        <h5>Personal Information</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi explicabo suscipit
                            deleniti voluptatum quos nostrum iure doloremque cupiditate voluptatem a enim eaque quod
                            perspiciatis repudiandae, mollitia adipisci ea, quidem eveniet consequatur veniam error.
                            Adipisci, suscipit corporis repellat, soluta vitae deserunt perspiciatis labore
                            reprehenderit sapiente provident vel maxime.</p>
                        <ul class="m-0 p-0">
                            <li>Morbi fermentum felis nec</li>
                            <li>Fermentum felis nec gravida tempus.</li>
                            <li>Morbi fermentum felis nec</li>
                            <li>Fermentum felis nec gravida tempus.</li>
                            <li>Morbi fermentum felis nec</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skills">
                        <h5>Personal Skills</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis repellat inventore at
                            praesentium perspiciatis labore reprehenderit sapiente provident vel maxime.</p>
                        <div class="skill-bars">
                            <!-- SkillBar -->
                            <div class="skill-bar">
                                <!-- Title -->
                                <p>Wordpress</p>
                                <!-- Progress Bar -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%;"><span>90%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- SkillBar -->
                            <div class="skill-bar">
                                <!-- Title -->
                                <p>PHP</p>
                                <!-- Progress Bar -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;">
                                        <span>75%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- SkillBar -->
                            <div class="skill-bar">
                                <!-- Title -->
                                <p>Javascript</p>
                                <!-- Progress Bar -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;">
                                        <span>60%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- SkillBar -->
                            <div class="skill-bar">
                                <!-- Title -->
                                <p>HTML</p>
                                <!-- Progress Bar -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;">
                                        <span>80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>