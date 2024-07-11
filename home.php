<?php
include 'connection.php';
$jumlahMahasiswa = $con->query('select count(*) from mahasiswa')->fetch_array()[0];
$jumlahDosen = $con->query('select count(*) from dosen')->fetch_array()[0];
$jumlahMatkul = $con->query('select count(*) from matkul')->fetch_array()[0];
?>
<div class="row my-5">
    <h1 class="text-primary">Rekap Data</h1>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Mahasiswa</strong></div>
            <div class="card-body">
                <i class="fa fa-user-graduate fa-3x"></i>
                <h4 class="card-title mt-4"><?php echo $jumlahMahasiswa; ?> Data</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Dosen</strong></div>
            <div class="card-body">
                <i class="fa fa-users fa-3x"></i>
                <h4 class="card-title mt-4"><?php echo $jumlahDosen; ?> Data</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Mata Kuliah</strong></div>
            <div class="card-body">
                <i class="fa fa-book fa-3x"></i>
                <h4 class="card-title mt-4"><?php echo $jumlahMatkul; ?> Data</h4>
            </div>
        </div>
    </div>
</div>
<div class="row my-5">
    <h1 class="text-primary">Profil</h1>
    <div class="col-lg-2">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Foto</strong></div>
            <div class="card-body text-center">
                <img src="assets/img/profile.jpg" alt="Aqueit" width="150px" class="rounded-circle">
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Media Sosial</strong></div>
            <div class="card-body text-center">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="https://www.linkedin.com/in/m-rafly-aulia-akbar-6659a6286/" target="_blank" class="btn btn-link">Linkedin</a></li>
                    <li class="list-group-item"><a href="https://github.com/Raflyauliaakbar" target="_blank" class="btn btn-link">Github</a></li>
                    <li class="list-group-item"><a href="https://www.instagram.com/mrafly.akbar_/" target="_blank" class="btn btn-link">Instagram</a></li>
                    <li class="list-group-item"><a href="#" target="_blank" class="btn btn-link">Facebook</a></li>
                </ul>

            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Biodata</strong></div>
            <div class="card-body text-center">
                <table class="table" style="width:100%; margin:0 auto;">
                    <tbody>
                        <tr>
                            <td align="right" width="30%"><strong>NPM :</strong></td>
                            <td align="left" width="70%">2210010574</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Nama Lengkap :</strong></td>
                            <td align="left" width="70%">M.Rafly Aulia Akbar</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Fakultas :</strong></td>
                            <td align="left" width="70%">Teknologi Informasi</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Program Studi :</strong></td>
                            <td align="left" width="70%">Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Tempat Lahir :</strong></td>
                            <td align="left" width="70%">Marabahan</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Tanggal Lahir :</strong></td>
                            <td align="left" width="70%">13 November 2003</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Telepon :</strong></td>
                            <td align="left" width="70%">081253314186</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>email :</strong></td>
                            <td align="left" width="70%">mraflyauliaakbar03@gmail.com</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>