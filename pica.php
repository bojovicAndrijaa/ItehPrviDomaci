<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drink store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navbar content -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Drink store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Pocetna stranica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pica.php">Pića</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proizvodjac.php">Proizvođači</a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dodaj
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="novoPice.php">Novo piće</a></li>
                            <li><a class="dropdown-item" href="noviProizvodjac.php">Novi proizvodjač</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div style="height: 50px"></div>

    <!-- <img src ="pozadina.jpg"> -->
    
    
    <!-- Page Content -->
    <div class="container">

        <div style="height: 50px"></div>
        <div class="card  shadow my-5" style="background-color: grey">
            <div class="card-body p-4 ">
                <div style="height: 20px"></div>
                <h1 class="fw-bolder position-absolute start-50 translate-middle">
                    Drink store</h1>
                <div style="height: 30px"></div>
                <p class="lead fw-semibold position-absolute top-50 start-50 translate-middle "
                    style="text-align: center">Dobro došli na stranicu Pica
                    <br />  </p>
                <div style="height: 120px"></div>
                <br /><br /><br /><br /><br /><br /><br /><br />
                <p class="lead mb-0 fw-normal position-absolute start-50 translate-middle" style="text-align: center">
                    Informacije:
                    ab20190410@student.fon.bg.ac.rs<br />Kontakt telefon:
                    +381641281999</p>
                <br /><br />

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>