<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA_Compatible" content="IE=edge" />
    <meta name-" viewport" content="width=device -width, intial -scale=1 . 0" />
    <title>travelzan</title>
    <!-styLing ->
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDSLkIlwQp6LFnl8ZNdLGxu9YAA1QVWINks4PhcEl0SvqcyVLLD9aMhXd13u0joXtEKNoSOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.e.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVZBCNJ7UAyJxM6wuqIj61tLrc4MSXOsZH/EV+nYRRuWlolflfl"
            crossorigin=" anonymous ">
</head>

<body>
    <div class=" container">
        <div cLass="raw">
            <img src=" Logo2 . png">
        </div>
        <ul>
            <li class="pilih"><a href="beranda.php" style="color: yellow; text-decoration : none;"><i
                        class="fa-solid fa-gauge">
                    </i>&nbsp;&nbsp;<span>Halaman Utama</span></a></li>
            <li><i class=" fa-solid fa-graduation-cap"></i>&nbsp;<span>Data Mahasiswa</span></li>
            <li><i class="fa-solid fa-language"></i>&nbsp;<span> Bahasa</span></li>
            <li><i class="fa-regular fa-circle-question"></i>&nbsp; &nbsp; <span>Bantuan</span></li>
        </ul>
    </div>
    <div class="section">
        <div class="header">
            <div class=" nav">
                <i class="fa-solid fa-bars"></i>
                35
                <div class="search">
                    <input type="text" placehoLder="Search">&nbsp; &nbsp;
                    37
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> </button>
                </div>
                <div class="user">
                    <a href="#" clLass="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-gear"></i></a>
                    <a href="#" class="btn"><i class="fa-regular fa-user"></i></a>
                    <a class="btn" href="index.php"><i class="fa-solid fa-right-from-bracket"></i> </a>
                </div>
            </div>
        </div>
        <div class="isi">
            <div clLass="data">
                <div cLass="main">
                    <!-- untuk menge L uarkan data -->
                    <h2>Jumlah Mahasiswa</h2>
                    <div class="card" style="margin:auto 35px;">
                        <div class="card-header text-white bg-secondary">
                            Data Mahasiswa
                        </div>
                        <div clLass="card-body ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NIMK/th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Mata Kuliah</th>
                                        <th scope="col">Fakultas </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "koneksi. php" ;
                                        $sql2 = "SELECT * FROM mahasiswa ORDER BY id DESC";
                                        $q2 = mysqli_query($koneksi, $sql2) ;
                                        $urut = 1;
                                        while ($r2 = mysqli_fetch_array($Sq2)) {
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
    </div>
    </div>
</body>

</html>