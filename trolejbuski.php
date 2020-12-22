<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trolejbuski saobraćaj - SAobraćaj.ba</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/global-styles.css">
    <link rel="stylesheet" href="/css/trolejbuski-style.css">

    <!-- Material Design Bootstrap CSS -->
    <link rel="stylesheet" href="/css/mdb.min.css">

</head>

<body>

    <!-- Navigation -->
    <?php include "common/navbar.html"; ?>


    <header class="bg-primary text-white" style="background-image: url('/files/images/trolejbus.png'); background-size:cover">
        <div class="container text-center">
            <h1>Trolejbuski saobraćaj</h1>
        </div>
    </header>
    
    <div class="Trolejbuskelinije">
        <div class="col-lg-8 mx-auto">
            <h2>Mreža trolejbuskog saobraćaja sastoji se od 30 stanica, sa ukupno šest linija:</h2>
            <p>Trolejbuska mreža u Sarajevu je otvorena 1984. godine, čime je upotpunila, pored tramvajske mreže gradski promet u gradu.</p>
        </div>
    </div>

    <div class="container" style="padding: 32px;">
        <div id="accordion">

            <div class="card">
                <div class="card-header" id="naslov101">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#trgaustrije-otoka"
                            aria-expanded="true" aria-controls="trgaustrije-otoka">
                              <p class= "card-text" > Trg Austrije – Otoka </p>
                        </button>
                    </h5>
                </div>

                <div id="trgaustrije-otoka" class="collapse" aria-labelledby="naslov101" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Trg Austrije – Drvenija – Čobanija – Skenderija – Marijin Dvor – Grbavica – Stadion Grbavica – Azize Šaćirbegovića – Hrasno – Antuna Branka Šimića – Otoka</p>

                        <a href="/files/linije/otoka-trgaustrije.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a><br>
                        
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov102">
                    <h5 class="mb-0">
                        <button class="btn b" data-toggle="collapse" data-target="#otoka–jezero"
                            aria-expanded="false" aria-controls="otoka–jezero">
                               <p class= "card-text" > Otoka – Jezero </p>
                        </button>
                    </h5>
                </div>
                <div id="otoka–jezero" class="collapse" aria-labelledby="naslov102" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Otoka – Antuna Branka Šimića – Hrasno – Azize Šaćirbegovića – Stadion Grbavica – Grbavica – Marijin Dvor – Skenderija – Hamza Hume – Kino Radnik – Alipašina – Pijaca – Stadion – Jezero</p>
                        <a href="/files/linije/otoka-jezero.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a><br>
                       
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov103">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#trgaustrije–dobrinja"
                            aria-expanded="false" aria-controls="trgaustrije–dobrinja">
                               <p class= "card-text" > Trg Austrije – Dobrinja </p>
                        </button>
                    </h5>
                </div>
                <div id="trgaustrije–dobrinja" class="collapse" aria-labelledby="naslov103" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Trg Austrije – Drvenija – Čobanija – Skenderija – Marijin Dvor – Grbavica – Stadion Grbavica – Azize Šaćirbegovića – Hrasno I – Aneks – Švrakino Selo II – Švrakino Selo I – Alipašino Polje – Mojmilo – Mojmilo II – Dobrinja IV – Dobrinja (Skola) – Trafo – Dobrinja </p>
                        <a href="/files/linije/dobrinja-trgaustrije.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a><br>
                        
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov104">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#trgaustrije–alipasinopolje"
                            aria-expanded="false" aria-controls="trgaustrije–alipasinopolje">
                               <p class= "card-text" > Trg Austrije – Alipašino Polje </p>
                        </button>
                    </h5>
                </div>
                <div id="trgaustrije–alipasinopolje" class="collapse" aria-labelledby="naslov104" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Trg Austrije – Drvenija – Čobanija – Skenderija – Marijin Dvor – Grbavica – Stadion Grbavica – Azize Šaćirbegovića – Hrasno I – Aneks – Švrakino Selo II – Švrakino Selo I – Alipašino Polje</p>
                        <a href="/files/linije/alipasinopolje-trgaustrije.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a><br>
                        
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov107">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#dobrinja-jezero"
                            aria-expanded="false" aria-controls="dobrinja-jezero">
                               <p class= "card-text" > Dobrinja – Jezero </p>
                        </button>
                    </h5>
                </div>
                <div id="dobrinja-jezero" class="collapse" aria-labelledby="naslov107" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Dobrinja – Trafo – Dobrinja (Škola) – Dobrinja IV – Mojmilo II – Alipašino Polje – Švrakino Selo I – Švrakino Selo II – Aneks – Hrasno I – Azize Šaćirbegović – Stadion Grbavica -  Grbavica – Marijin Dvor – Skenderija -Hamza Hume – Kino Radnik – Alipašina – Pijaca – Stadion – Jezero </p>
                        <a href="/files/linije/dobrinja-jezero.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a><br>
                        
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="naslov108">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#otoka-dobrinja"
                            aria-expanded="false" aria-controls="otoka-dobrinja">
                               <p class= "card-text" > Otoka – Dobrinja </p>
                        </button>
                    </h5>
                </div>
                <div id="otoka-dobrinja" class="collapse" aria-labelledby="naslov108" data-parent="#accordion">
                    <div class="card-body">
                        <p>Ruta: Otoka – Antuna Branka Šimića – Hrasno – Azize Šaćirbegović – Hrasno I – Aneks – Švrakino Selo II -  Švrakino Selo I – Alipašino Polje – Mojmilo – Mojmilo II – Dobrinja V – Dobrinja (Škola) – Trafo – Dobrinja </p>
                        <a href="/files/linije/otoka-dobrinja.pdf"><i class="fas fa-file-pdf"></i> Preuzmi vozni red (GRAS)</a><br>
                        
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