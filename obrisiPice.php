<?php

require "dbBroker.php";
require "model/Pice.php";
session_start();
$result = Pice::getAll($link);
if (!$result) {
    echo "Greska kod upita<br>";
    die();
}
if ($result->num_rows == 0) {
    echo "Nema pica";
    die();
}
?>

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
                            <li><a class="dropdown-item" href="obrisiPice.php">Obrisi pice</a></li>
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


    <!-- Page Content -->
    <div class="container">
<div class="row">

  <div class="col-sm-8"> 
  <div style="height: 50px">
  <div class="card  shadow my-5" style="background-color: grey">
                <div class="card-body p-4 ">
                    <div style="height: 20px"></div>
                    <h1 class="fw-bolder position-absolute start-50 translate-middle">
                        Pica
                    </h1>
                    <br> <br>
                    <div style="height: 120px">
                    <div class="col-md-8" style="text-align:center; width:99.9%;float:left">
                        <div class="tabela">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Pice id</th>
                                        <th scope="col">Naziv pica</th>
                                        <th scope="col">Godina proizvodnje</th>
                                        <th scope="col">Cena</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($red = $result->fetch_array()) {
                                        ?>
                                    <tr id="tr-">
                                        <td><?php echo $red["piceId"] ?></td>
                                        <td><?php echo $red["naziv"] ?></td>
                                        <td><?php echo $red["godinaProizvodnje"] ?></td>
                                        <td><?php echo $red["cena"] ?></td>
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
  <div class="col-sm-4">
  <div style="height: 50px">
        <div class="card  shadow my-5" style="background-color: grey">
            
            <div class="card-body p-4 ">
                <div style="height: 120px">
                <form method="post">

                            <select class="form-control" name="selectPice">

                            <?php
                            $rez = Pice::getAll($link);
                            while ($pice = mysqli_fetch_array($rez)) {
                                $piceId = $pice['piceId'];
                                $naziv=$pice['naziv'];
                            ?>
                            <option value="<?php echo $piceId ?>">
                                <?php echo $naziv?>
                            </option>
                            <?php
                            }
                            ?>
                            </select>
                            <br>
                            <div class="divDugme">
                                <button type="submit" name="delete" class=" btn btn-dark">Izbrisi pice</button>
                                <br />
                            </div>
                        </div>
                        
                        <br />
                        
                    </form>
                   
                    </div>

            </div>
             

            </div>
        </div>
  </div>
</div>
</div>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


</body>

</html>

<?php

if (isset($_POST['delete'])) {
    $vrednost = $_POST['selectPice'];
    Pice::deleteById($link, $vrednost);
}

?>