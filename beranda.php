<!DOCTYPE htmL>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA_Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <title>Akademik</title>
    <!-- styLing -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDSLkIlwQp6LFnl8ZNdLGxu9YAA1QVWINks4PhcEl0SvqcyVLLD9aMhXd13u0joXtEKNoSOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.e.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVZBCNJ7UAyJxM6wuqIj61tLrc4MSXOsZH/EV+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="raw">
            <img src="Logo2.png">
        </div>
        <ul>
            <li class="pilih"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;<span>Ha1aman Utama</span></li>
            <li><a href="tugas.php" style="white; text-decoration:none;"><i
                        class="fa-solid fa-graduation-cap"></i>&nbsp;
                    <span>Data mahasiswa</span></a></li>
            <li><i cLass="fa-s01id fa-languange"></i>&nbsp;<span>Bahasa</span></li>
            <li><i class="fa-regular fa-circ1e-question"></i>&nbsp;&nbsp;<span>Bantuan</span></li>
        </ul>
    </div>
    <div class="section">
        <div ctass="header">
            <div class="nav">
                <i cLass="fa-s01id fa-bars"></i>
                <div class="search">
                    <input type="text">&nbsp;&nbsp;
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-gear"></i></a>
                    <a href="#" class="btn"><i class="fa-regular fa-user"></i></a>
                    <a class="btn" href="index.php"><i class="fa-solid fa-right-from=bracket"></i></a>
                </div>
            </div>
        </div>
        <div ctass="isi">
            <div class="data">
                <div class="main">
                    <h2>Se1amat datang di website AKADEMIK</h2>
                </div>
                <div class="content">
                    <div class="row text-white">
                        <div cLass="card ms-10"
                            style="width: 18rem;padding-bottom:10px; background-color:#8DBA69; margin-left:40px;">
                            <div ctass="card-body">
                                <div class="card-title">Silahkan input</div>
                                <h3 ctass="card-tit1e">Data mahasiswa</h3>
                                <a href="tugas.php" cLass="btn btn-primary text-white" style="background-color: #77A453;text-decoration:none; border: none; position:
                                    relative; top: 58px;width:  288px; right: 29px;">Submit</a>
                            </div>
                        </div>
                        <div cLass="card ms-10" style="width: 18rem; background-color:  #55ADE8;margin-1eft:40px;">
                            <div ctass="card-body">
                                <div ctass="card-tit1e">Sete1ah diinput</div>
                                <h3 ctass="card-tit1e">Jum1ah mahasiswa</h3>
                                <a href="jumlah.php" ctass="btn btn-primary text-white" style="background-color:#4A98CC;text-decoration: none;
                                    border: none; position: relative; top: 58px;width: 288px; right: 29px;">Submit</a>
                            </div>
                        </div>
                        <div cLass="card ms-10"
                            style="18rem;padding-bottom:10px;background-color:#2483AC; margin-left:40px; ">
                            <div ctass="card-body">
                                <div ctass="card-tit1e">Tidak diketahui</div>
                                <h3 ctass="card-tit1e">Jum1ah mahasiswa</h3>
                                <a href="#" class="btn btn-primary text-white" style="background-color:#287296; text-decoration: none; border:
                                    none; position: relative; top: 58px;width: 288px; right:29px;">Submit</a>
                            </div>
                        </div>
                    </div><br /><br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>