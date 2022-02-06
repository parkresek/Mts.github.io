<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Agenda</title>
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
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="agenda.php">Agenda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Organisasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="osis.php">Osis</a></li>
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

    <div class="container bg-success " style=margin-top:100px>
        <h2>Agenda Tahun 2001</h2>
    </div>
    <div class="container " style=margin-top:50px>
        <table class="table">
            <thead>
                <tr>
                    <th scope="co">No</th>
                    <th scope="co">Kegiatan</th>
                    <th scope="co">Jadwal</th>
                    <th scope="co">Keterangan</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Bakti Sosial</td>
                    <td>20 oktober 2001</td>
                    <td>Kegiatan utama</td>
                </tr>

                <tr>
                    <td scope="row">2</td>
                    <td>Sosialisasi Kebangsaan</td>
                    <td>13 November 2001</td>
                    <td>Kegiatan pembantu</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container bg-success" style=margin-top:100px;>
        <h2>Example of Jumbotron</h2>
    </div>
    <div class="container" style=margin-top:50px;>
        <div class="mt-4 p-5 bg-dark text-white rounded">
            <h1>Jumbotron Example</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>