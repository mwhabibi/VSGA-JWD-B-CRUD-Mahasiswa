<?php
include("koneksi.php");
?>
<html>

<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right mt-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-input" onclick="ResetInput()">Tambah</button>
            </div>
            <div class="col-md-12 mt-3">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM ms_mahasiswa";
                        $query = mysqli_query($db, $sql);
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<tr>
								<td align='center'>" . $no++ . "</td>
								<td>" . $data['nim'] . "</td>
								<td>" . $data['namaMahasiswa'] . "</td>
								<td align='center'>" . $data['jenisKelamin'] . "</td>
								<td align='center'>" . $data['agama'] . "</td>
								<td>" . $data['alamat'] . "</td>
								<td>" . $data['prodi'] . "</td>
								<td align='center'>
									<button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modal-input' onclick='SetInput(" . json_encode($data) . ")'>Ubah</button> 
									<button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#modal-hapus' onclick='SetHapus(" . json_encode($data) . ")'>Hapus</button>
								</td>
							</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-input" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="simpan.php" method="post">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">NIM</label>
                            <div class="col-md-8">
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" id="nim" name="nim" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Nama Mahasiswa</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="namaMahasiswa" name="namaMahasiswa" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Jenis Kelamin</label>
                            <div class="col-md-8">
                                <select class="form-control" id="jenisKelamin" name="jenisKelamin" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Agama</label>
                            <div class="col-md-8">
                                <select class="form-control" id="agama" name="agama" required>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Alamat</label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="alamat" name="alamat" style="resize: none;" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 form-label">Program Studi</label>
                            <div class="col-md-8">
                                <select class="form-control" id="prodi" name="prodi" required>
                                    <option value="Teknik Pembentukan Logam">Teknik Pembentukan Logam</option>
                                    <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                                    <option value="Teknik Listrik">Teknik Listrik</option>
                                    <option value="Teknik Komputer Kontrol">Teknik Komputer Kontrol</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="Akuntansi Sektor Publik">Akuntansi Sektor Publik</option>
                                    <option value="Akuntansi Perpajakan">Akuntansi Perpajakan</option>
                                    <option value="Teknologi Rekayasa Otomotif">Teknologi Rekayasa Otomotif</option>
                                    <option value="Teknologi Rekayasa Perangkat Lunak">Teknologi Rekayasa Perangkat Lunak</option>
                                    <option value="Teknologi Rekayasa Elektronika">Teknologi Rekayasa Elektronika</option>
                                    <option value="Pemasaran Digital">Pemasaran Digital</option>
                                    <option value="Perkeretaapian">Perkeretaapian</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="hapus.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" id="idHapus" name="id">
                        <p id="pesan"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-success">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function ResetInput() {
            $('#title').html('Tambah Mahasiswa');
            $('#id').val(peg['idMahasiswa']);
            $('#nim').val(peg['nim']);
            $('#namaMahasiswa').val(peg['namaMahasiswa']);
            $('#jenisKelamin').val(peg['jenisKelamin']);
            $('#agama').val(peg['agama']);
            $('#alamat').val(peg['alamat']);
            $('#prodi').val(peg['prodi']);
        }

        function SetInput(peg) {
            $('#title').html('Ubah Mahasiswa');
            $('#id').val(peg['idMahasiswa']);
            $('#nim').val(peg['nim']);
            $('#namaMahasiswa').val(peg['namaMahasiswa']);
            $('#jenisKelamin').val(peg['jenisKelamin']);
            $('#agama').val(peg['agama']);
            $('#alamat').val(peg['alamat']);
            $('#prodi').val(peg['prodi']);
        }

        function SetHapus(peg) {
            $('#pesan').html('Apakah anda yakin ingin menghapus Mahasiswa ' + peg['namaMahasiswa'] + '?');
            $('#idHapus').val(peg['idMahasiswa']);
        }
    </script>
</body>

</html>