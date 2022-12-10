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

    <div style="height: 50px"></div>

    <!-- <img src ="pozadina.jpg"> -->
    
    
    <!-- Page Content -->
    <div class="container">

    <div style="height: 50px"></div>
        <div class="card  shadow my-5" style="background-color: grey">
            
            <div class="card-body p-4 ">
                <div style="height: 20px"></div>
                <h1 class="fw-bold position-absolute start-50 translate-middle"> Drink Store
                </h1>
                <div style="height:175px"></div>
                <p class="lead fw-semibold position-absolute start-50 translate-middle " id="tekst"
                    style="text-align: center">
                    Pritiskom na dugme 'Opis', prikazacemo opis najprodavanijeg pica! <br />
                    Pritiskom na dugme 'Prodavci' prikazace se lista prodavaca!</p>
                <div style="height: 150px"></div>
                <div class="form-group position-absolute start-50 translate-middle">
                    <span>
                        <button class="btn btn-dark" type="submit" id="opis">Opis</button>
                        <button class="btn btn-dark" type="submit" id="prodavaci">Prodavci</button>
                        <button class="btn btn-dark" onclick="odbrojavanje()">Osvezi za 5 sekundi</button>
                    </span>
                </div>
                

            </div>
             

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous">
    </script>
    <script>
        //iz txt

        document.getElementById("opis").addEventListener("click", ucitajOpis);

        function ucitajOpis() {
            var xmlhr = new XMLHttpRequest();
            xmlhr.open("GET", "opisPica.txt", true);

            xmlhr.onload = function () {
                if (this.status == 200) {
                    document.getElementById("tekst").innerHTML = this.responseText; //ispisi taj tekst na stranici
                }
            };

            xmlhr.send();
        }

        //iz json
        document.getElementById("prodavaci").addEventListener("click", ucitajZaposlene);
        function ucitajZaposlene() {
            var xmlhr = new XMLHttpRequest();
            xmlhr.open("GET", "prodavci.json", true);
            xmlhr.onload = function () {
                if (this.status == 200) {
                    var zaposleni = JSON.parse(this.responseText);
                    var output = "";
                    //prolazim kroz niz objekata 
                    for (var i in zaposleni) {
                        output +=
                            "<p>" +
                            zaposleni[i].ime +
                            " " +
                            zaposleni[i].prezime +
                            
                        "</p>";
                    }
                    document.getElementById("tekst").innerHTML = output;
                }
            };
            xmlhr.send();
        }
        //refresh
        function odbrojavanje() {
            setTimeout(() => {
                location.reload();
            }, 5000)

        }

    </script>
</body>

</html>