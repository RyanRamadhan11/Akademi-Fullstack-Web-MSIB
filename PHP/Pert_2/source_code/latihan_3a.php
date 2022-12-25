<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan Memproses Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <form class="border border-light p-5" method="POST">

            <p class="h4 mb-4 text-center">Form Input Nilai</p>

            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control mb-4" placeholder="Nama Mahasiswa">

            <label for="matkul">Mata Kuliah</label>
            <select class="browser-default custom-select mb-4" name="matkul">
                <option value="" disabled="" selected="">-- Pilih Mata Kuliah --</option>
                <option value="Database">Database</option>
                <option value="Matematika">Matematika</option>
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
            </select>
            <br />
            <label for="nilai">Nilai</label>
            <input type="text" name="nilai" class="form-control mb-4" placeholder="Nilai">

            <button class="btn btn-info btn-block my-4" name="proses" type="submit">Simpan</button>

        </form>
        <?php 
        //tangkap request
        $nama = $_POST['nama'];
        $pelajaran = $_POST['matkul'];
        $nilai = $_POST['nilai'];
        $tombol = $_POST['proses'];
        //tentukan kelulusan
        $ket = ($nilai >= 60)?"Lulus":"Gagal";
        //tentukan grade nilai
        if($nilai >= 85 && $nilai <= 100) $grade = 'A';
        else if($nilai >= 75 && $nilai < 85) $grade = 'B';
        else if($nilai >= 60 && $nilai < 75) $grade = 'C';
        else if($nilai >= 30 && $nilai < 60) $grade = 'D';
        else if($nilai >= 0 && $nilai < 30) $grade = 'E';
        else $grade = '';
        //tentukan predikat
        switch ($grade) {
            case 'A': $predikat = 'Memuaskan'; break;
            case 'B': $predikat = 'Bagus'; break;
            case 'C': $predikat = 'Cukup'; break;
            case 'D': $predikat = 'Kurang'; break;
            case 'E': $predikat = 'Buruk'; break;
            default: $predikat = '';
        }
        
        if(isset($tombol)){ ?>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Nama Mahasiswa: <?= $nama ?>
                        <br />Mata Kuliah: <?= $pelajaran ?>
                        <br />Nilai: <?= number_format($nilai, 2, ',', '.'); ?>
                        <br />Keterangan: <?= $ket ?>
                        <br />Grade: <?= $grade ?>
                        <br />Predikat: <?= $predikat ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>

        <?php } ?>
        
        <script>
            const output = new bootstrap.Modal(document.getElementById("exampleModal"));
            output.show();
        </script>

        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>