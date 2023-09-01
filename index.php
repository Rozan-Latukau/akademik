<?php
include "koneksi.php"
if (isset($_GET['op'])){
    $op = $_GET['op'];
} else {
    $op = "";
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM mahasiswa WHERE id = '$id&hapus=1'";
    $q1 = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error = "Gagal melakukan delete data";
    }
}
if ($op == 'edit'){
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM mahasiswa WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sqll);
    $r1 = mysqli_fetch_array($ql);
    $nim = $r1['nim'];
    $nama = $r1['nama'];
    $matkul = $r1['matkul'];
    $fakultas = $r1['fakultas'];

    if ($nim = ''){
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $fakultas = $_POST['fakultas'];
    if ($nim && $nama && $matkul && $fakultas) {
        if ($op == 'edit') { //untuk update
            $sqll = "UPDATE mahasiswa SET nim = '$nim',nama='$nama' ,matkul ='$matkul' ,fakultas= '$fåkultas' WHERE id= '$id'";
            $q1 = mysqli_query($koneksi, $sqll);
            if ($q1) {
                $sukses ="Data berhasil diupdate";
            } else {
                $error = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sqll = "INSERT INTO VALUES ('$nim' , '$nama', '$matkul' , '$fakultas')";
            $q1 = mysqli_query($koneksi, $sqll);
            if ($q1) {
                $sukses = "Data berhasil";
            } else {
                $error = "Data gagal, silahkan coba lagu" ;
            }
        }
    }else {
        $error = "Data belum dimasukkan, silahkan isi terlebih dahulu";
    }
}
?>

<!DOCTYPE htmL>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA=Compatib1e" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=l.Ø">
    <title>Akademik</title>
    <!-- styling -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.c10udf1are.com/ajax/1ibs/font-awesome/6.1.1/css/a11.min.css"
        integrity="sha512-KfkfwYDsLkllwQp6LFn18zNdLGxu9YAAIQvwINks4PhcEIQSvqcyVLLDgaP1hXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsde1ivr.net/npm/bootstrap@5.e.e-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+YRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="raw">
            <img src="Logo2.png">
        </div>
        <ul>
            <li><a href="beranda.php" style="color: white; text-decoration:none;"><i
                        cLass="fa-s01id fa-gauge"></i>&nbsp;&nbsp;
                    <span>Ha1aman Utama</span></a></li>
            <1i class="pilih"><i class="fa-solid fa-graduation-cap"></i>&nbsp;<span>Data Mahasiswa</span></li>
                <li><i class="fa-1anguage"></i>&nbsp;<span>Bahasa</span>
            </1i>
            <li><i class="fa-regular fa-circ1e-question"></i>&nbsp;&nbsp;<span>Bantuan</span></1i>
        </ul>
    </div>
    <div cLass="section">
        <div cLass="header">
            <div class="nav">
                <i class="fa-solid fa-bars"></i>
                <div cLass="Search">
                    <input type="text" placeho Lder="Search">&nbsp; &nbsp;
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-gear"></i></a>
                    <a href="#" class="btn"><i class="fa-regular fa-user"></i></a>
                    <a class="btn" href="index.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                </div>
            </div>
        </div>
        <div class="isi">
            <div class="data">
                <div class="main">
                    <h2>Sistem Akademik</h2>
                    <div cLass="mx-auto">
                        <!-- untuk memasukkan data -->
                        <div class="card">
                            <div class=" card -header">
                                Create / Edit Data
                            </div>
                            <div class=" card-body">
                                <?php
                                if ($error) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error ?>
                                </div>
                                <?php
                                    header("refresh:5; url-tugas. php"): //5 : detik
                                }
                                ?>
                                <?php
                                if ($sukses) {
                                ?>
                                <div cLass="alert alert-Success" role="alert">
                                    <?php echo $sukses ?>
                                </div>

                                <?php
                                    header("refresh:5; url-tugas.php");
                                }
                                ?>
                                <form action="" method="POST">
                                    <div cLass="mb-3 row">
                                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                        <div cLass="col-sm-10">
                                            <input type="text" class="form-control" id="nim" name="nim"
                                                value="<?php echo $nim ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="<?php echo $nama ?>">
                                        </div>
                                    </div>
                                    <div cLass="mb-3 row">
                                        <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
                                        <div clLass="col-sm-10">
                                            <select class="form-control" name="matkul" id="matkul"
                                                <?php error_reporting (e) ?>>
                                                <option value="">- Pilih Mata Kuliah -</option>
                                                <option value="Algoritma dan Pemrograman" <?php if ($r1[ 'matkul '] ==
                                                "Algoritma dan Pemrograman ") echo "selected" ?>>Algoritma dan
                                                    Pemrograman </option>
                                                <option value="Pwss" <?php if ($r1['matkul'] == 
                                                "Pwss") echo "selected" ?>>Pemrograman Web Server Side</option>
                                                <option value="Pemrograman Web client" <?php if ($r1['matkul'] == 
                                                    "Pemrograman Web client") echo "selected" ?>>
                                                    Pemrograman Web Client
                                                </option>
                                                <option value="Jaringan Komputer" <?php if ($r1['matkul'] ==
                                                "Jaringan Komputer") echo "selected" ?>>Jaringan Komputer</option>
                                                <option value="UI/UX Design" <?php if ($r1[' matkul'] ==
                                                "UI/UX Design") echo "selected" ?>>UI/UX Design</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div cLass="mb-3 row">
                                        <label for="fakultas" class="col-sm-2 col-form-label ">Fakultas</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="fakultas" id="fakultas"
                                                <?php error_reporting (e) ?> <option value="">- Pilih Fakultas -
                                                </option>
                                                <option value="Sistem Informasi" <?php if (Sr1['fakultas'] ==
                                                "Sistem Informasi") echo "selected" ?>>Sistem Informasi</option>
                                                <option value="Teknik Informatika " <?php if (Sr1['fakultas' ] ==
                                                "Teknik Informatika") echo "selected" ?>> Teknik Informatika</option>
                                                <option value="Teknik Komputer" <?php if ($r1['fakultas'] ==
                                                "Teknik Komputer") echo "selected" ?>>Teknik Komputer</option>
                                                <option value="Sia" <?php if ($r1['fakultas'] == 
                                                "Sia") echo"selected" ?>>SistemInformasi Akuntansi</option>
                                                <option value="Bisnis Digital" <?php if ($r1['fakultas'] ==
                                                "Bisnis Digital") echo "selected" ?>>Bisnis Digital</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" name="simpan" value="Simpan Data"
                                            class="btn btn-primary" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- untuk menge Luarkan data -->
                        <div class="card">
                            <div class="card-header text-white bg-secondary">
                                Data Mahasiswa
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Namas/th>
                                            <th scope="col">Mata Kuliah</th>
                                            <th scope="col">Fakultas</th>
                                            <th scope="co1">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql2 ="SELECT * FROM mahasiswa ORDER BY id DESC";
                                        $q2 = mysqli_query($koneksi, $sql2) ;
                                        $urut = 1:
                                        while ($r2 = mysqli_fetch_array($q2)) {
                                            $id = $r2['id'];
                                            $nim = $r2['nim'];
                                            $nama = $r2['nama']:
                                            $matkul = $r2['matkul'];
                                            $fakultas = $r2['fakultas']:
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $urut++ ?></th>
                                            <td scope="row"><?php echo $nim ?></td>
                                            <td scope="row"><?php echo $nama ?></td>
                                            <td scope="row"><?php echo $matkul ?></td>
                                            <td scope="row"><?php echo $fakultas ?></td>
                                            <td scope="row">
                                                <a href="tugas.php?op=edit&id=<?php echo $id ?>"><button type="button"
                                                        class="btn btn-warning">Edit</button></a>
                                                <a href="tugas.php?op=delete&id=<?php echo $id ?>" oncLick="return 
                                                confirm('Yakin mau delete data?')"><button type="button"
                                                        class="btn btn-danger">Delete</button></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>