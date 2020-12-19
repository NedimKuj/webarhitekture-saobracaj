<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tramvajski saobraćaj - SAobraćaj.ba</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/global-styles.css">
    <link rel="stylesheet" href="/css/tramvajski-style.css">

    <!-- Material Design Bootstrap CSS -->
    <link rel="stylesheet" href="/css/mdb.min.css">

</head>

<body id="page-top">

    <!-- Navigation -->
    <?php include "common/navbar.html"; ?>

    <header class="bg-primary text-white" style="background-image: url('/files/images/tramvaj.png'); background-size:cover">
        <div class="container text-center">
            <h1>Tramvajski saobracaj</h1>
        </div>
    </header>

    <div class="historijski-razvoj">
        <div class="col-lg-8 mx-auto">
            <h2>Historijski razvoj tramvajskog saobraćaja u Sarajevu</h2>
                <p>Prvi tramvaj kog su vukli konji prošao je Sarajevom 1. januara 1885. godine. Jednosmjerna trasa je bila duga 3,1 km, a pruga je počinjala od današnjeg Ekonomskog fakulteta, pružala se Ferhadijom i dalje glavnom gradskom ulicom (današnjom Titovom) preko Marindvora i završavala na Uzanoj željezničkoj stanici.  Tramvaj je mogao povesti 28 osoba. 1. maja 1895. godine je elektriziran. Ujedno je trasa tramvaja proširena, te je od željezničke stanice na Pofalićima, koja se tada nalazila kod današnjeg hotela Bristol, pa do Latinske ćuprije. 
                </p>
        </div>
    </div>
    
    <div class="tramvajskelinije">
        <div class="col-lg-8 mx-auto">
            <h2>Mreža tramvajskog saobraćaja sastoji se od 27 stanica, sa ukupno šest linija:</h2>
        </div>
    </div>

    <div class="container" style="padding: 32px;">
        <div id="accordion">

            <div class="card">
                <div class="card-header" id="naslov1">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#bascarsija-zeljeznickastanica" aria-expanded="true" aria-controls="bascarsija-zeljeznickastanica">
                        <p class= "card-text" > Baščaršija – Željeznička stanica </P>
                        </button>
                    </h5>
                </div>

                <div id="bascarsija-zeljeznickastanica" class="collapse" aria-labelledby="naslov1" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Baščaršija – Katedrala – Banka – Park – Marijin Dvor – Muzeji – Tehnička škola – Željeznička stanica </p>

                        <a href="/files/linije/bascarsija-zeljeznickastanica.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov2">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#bascarsija-cengicvila" aria-expanded="false" aria-controls="bascarsija-cengicvila">
                            <p class= "card-text" > Baščaršija – Čengić Vila </p>
                        </button>
                    </h5>
                </div>
                <div id="bascarsija-cengicvila" class="collapse" aria-labelledby="naslov2" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Baščaršija – Katedrala – Banka – Park – Marijin Dvor – Muzeji – Univerzitet – Pofalići – Socijalno – Dolac Malta – Čengić Vila</p>

                        <a href="/files/linije/bascarsija-cengicvila.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov3">
                    <h5 class="mb-0">
                        <button class="btn b" data-toggle="collapse" data-target="#bascarsija-ilidza" aria-expanded="false" aria-controls="bascarsija-ilidza">
                            <p class= "card-text" > Baščaršija – Ilidža </p>
                        </button>
                    </h5>
                </div>
                <div id="bascarsija-ilidza" class="collapse" aria-labelledby="naslov3" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Baščaršija – Katedrala – Banka – Park – Marijin Dvor – Muzeji – Univerzitet – Pofalići – Socijalno – Dolac Malta – Čengić Vila – Otoka – Alipašin Most – Nedžarići – Avaz/Oslobodjenje – Stup – Energoinvest – Kasindolska – Ilidža</p>

                        <a href="/files/linije/bascarsija-ilidza.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov4">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#zeljeznickastanica-ilidza" aria-expanded="false" aria-controls="zeljeznickastanica-ilidza">
                           <p class= "card-text" > Željeznička stanica – Ilidža </p>
                        </button>
                    </h5>
                </div>
                <div id="zeljeznickastanica-ilidza" class="collapse" aria-labelledby="naslov4" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Željeznička stanica – Tehnička škola - Univerzitet – Pofalići – Socijalno – Dolac Malta – Čengić Vila – Otoka – Alipašin Most – Nedžarići – Avaz/Oslobodjenje – Stup – Energoinvest – Kasindolska – Ilidža</p>

                        <a href="/files/linije/zeljeznickastanica-ilidza.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov5">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#bascarsija-nedzarici" aria-expanded="false" aria-controls="bascarsija-nedzarici">
                            <p class= "card-text" > Baščaršija – Nedžarići 
                        </button>
                    </h5>
                </div>
                <div id="bascarsija-nedzarici" class="collapse" aria-labelledby="naslov5" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Baščaršija – Katedrala – Banka – Park – Marijin Dvor – Muzeji – Univerzitet – Pofalići – Socijalno – Dolac Malta – Čengić Vila – Otoka – Alipašin Most – Nedžarići</p>

                        <a href="/files/linije/bascarsija-nedzarici.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov6">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#skenderija-ilidza" aria-expanded="false" aria-controls="skenderija-ilidza">
                            <p class= "card-text" > Skenderija – Ilidža </p>
                        </button>
                    </h5>
                </div>
                <div id="skenderija-ilidza" class="collapse" aria-labelledby="naslov6" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Hamza Hume – Marijin Dvor – Muzeji – Univerzitet - Pofalići – Socijalno – Dolac Malta – Čengić Vila – Otoka – Alipašin Most – Nedžarići – Avaz/Oslobodjenje – Stup – Energoinvest – Kasindolska – Ilidža</p>

                        <a href="/files/linije/skenderija-ilidza.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include "common/footer.html"; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>

    <!-- Custom JavaScript for this theme -->

</body>

</html>