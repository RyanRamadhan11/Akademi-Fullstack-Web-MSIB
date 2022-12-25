
<?php
$sql = "SELECT p.nip,p.nama,p.gender, d.nama AS bagian, j.nama AS jab, p.alamat
        FROM pegawai p 
        INNER JOIN divisi d ON d.id = p.divisi_id
        INNER JOIN jabatan j ON j.id = p.jabatan_id
        ORDER BY p.id DESC";
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
<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Pegawai</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_pegawai as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['nip'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['gender'] ?></td>
                            <td><?= $row['bagian'] ?></td>
                            <td><?= $row['jab'] ?></td>
                            <td><?= $row['alamat'] ?></td>
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