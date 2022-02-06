<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mts</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container-fluid">
            <img src="img/—Pngtree—cloud data vector icon_3756185.png" alt="" width="50" height="45" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agenda.php">Agenda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Organisasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item active bg-success" href="osis.php">Osis</a></li>
                            <li><a class="dropdown-item" href="#">Pramuka</a></li>
                            <li><a class="dropdown-item" href="#">PMR</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Lainnya</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dokumentasi</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" style=margin-left:10px type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--Navbar-->
    <div class="container bg-success" style="margin-top:100px;">
        <h2>Profil </h2>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="container">
                    <img src="img/pngwing.com (1).png" alt="" width="200" height="200">
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Visi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>

                <h3>Misi</h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container bg-success" style="margin-top:50px;">
        <h2>Pengurus</h2>
    </div>
    <!-- grid-->
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col">
                <!-- placeholders-->
                <div class="card">
                    <img src="img/library-g52420156b_1920.jpg" class="card-img" alt="ini adalah gambar contoh">

                    <div class="card-body">
                        <h5 class="card-title">Ketua</h5>
                        <p class="card-text">Example Name</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
                <!-- placeholders-->
            </div>
            <div class="col">
                <!-- placeholders-->
                <div class="card">
                    <img src="img/library-g52420156b_1920.jpg" class="card-img" alt="ini adalah gambar contoh">

                    <div class="card-body">
                        <h5 class="card-title">Wakil Ketua</h5>
                        <p class="card-text">Example Name</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
                <!-- placeholders-->
            </div>
            <div class="col">
                <!-- placeholders-->
                <div class="card">
                    <img src="img/library-g52420156b_1920.jpg" class="card-img" alt="ini adalah gambar contoh">

                    <div class="card-body">
                        <h5 class="card-title">Sekretaris</h5>
                        <p class="card-text">Example Name</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
                <!-- placeholders-->
            </div>
        </div>
    </div>
    <!-- grid-->
    <!--tebel-->
    <div class="container bg-success " style=margin-top:50px>
        <h2>Kegiatan</h2>
    </div>
    <div class="container" style="margin-top: 10px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="co">No</th>
                    <th scope="co">Nama Kegiatan</th>
                    <th scope="co">Jadwal Kegiatan</th>
                    <th scope="co">Keterangan</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Example</td>
                    <td>Example</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</td>
                </tr>

                <tr>
                    <td scope="row">2</td>
                    <td>Example01</td>
                    <td>Example01</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</td>
                </tr>

                <tr>
                    <td scope="row">3</td>
                    <td>Example02</td>
                    <td>Example02</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</td>
                </tr>

                <tr>
                    <td scope="row">4</td>
                    <td>Example03</td>
                    <td>Example03</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--tabel-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>