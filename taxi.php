<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Taxi saobraćaj - SAobraćaj.ba</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/global-styles.css">
    <link rel="stylesheet" href="/css/taxi-style.css">

    <!-- Material Design Bootstrap CSS -->
    <link rel="stylesheet" href="/css/mdb.min.css">

</head>

<body>

    <!-- Navigation -->
    <?php include "common/navbar.html"; ?>


    <header class="bg-primary text-white" style="background-image: url('/files/images/taxi.jpg'); background-size:cover">
        <div class="container text-center">
            <h1>TAXI</h1>
        </div>
    </header>

    <div class="historijski-razvoj">
        <div class="col-lg-8 mx-auto">
            <h2>Historijat</h2>
                <p>Početkom 17. stoljeća na ulicama Pariza i Londona saobraćale su kočije koje su vukli konji a koje su se mogle iznajmiti za prevoz ulicama ovih gradova. U 19. stoljeću u ovim gradovima su kraljevskim ukazima određena i prva pravila taksi službe koja su zahtjevala unaprijeđenje dizajna radi povećanja sigurnosti i brzine prevoza. Vremenom su kočije sa konjima zamijenili automobili koji su kroz prošlost postajali udobniji, sigurniji i brži način prijevoza putnika. Današnji automobili namjenjeni taksi službi su klimatizirani i opremljeni najsavremenijom opremom koja garantuje udoban prevoz.
                </p>
        </div>
    </div>
    
    <div class="taxilinije">
        <div class="col-lg-8 mx-auto">
            <h2>Evidencija Taxi prijevoznika registrovanih u Ministrastvu saobraćaja Kantona Sarajevo:</h2>
        </div>
    </div>

    <div class="container" style="padding: 32px;">
        <div id="accordion">

            <div class="card">
                <div class="card-header" id="taxi1">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#bosstaxi"
                            aria-expanded="true" aria-controls="bosstaxi">
                               <p class= "card-text" >Boss Taxi </p>
                        </button>
                    </h5>
                </div>

                <div id="bosstaxi" class="collapse" aria-labelledby="taxi1" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontak: +38733531200</p>
                        <p>Adresa: Azize Sokolovića 2</p>
                        
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="taxi2">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#crvenitaxi"
                            aria-expanded="false" aria-controls="crvenitaxi">
                               <p class= "card-text" >Crveni Taxi </p>
                        </button>
                    </h5>
                </div>
                <div id="crvenitaxi" class="collapse" aria-labelledby="taxi2" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontak: +38733760600</p>
                        <p>Adresa: Trg ZAVNOBIH-a</p>
                    
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="taxi3">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#kaletaxi"
                            aria-expanded="false" aria-controls="kaletaxi">
                               <p class= "card-text" >Kale Taxi </p>
                        </button>
                    </h5>
                </div>
                <div id="kaletaxi" class="collapse" aria-labelledby="taxi3" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontakt: +38733570900; +38733570901</p>
                        <p>Adresa: Nedžada Musića 73</p>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="taxi4">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#pajataxi"
                        aria-expanded="false" aria-controls="pajataxi">
                           <p class= "card-text" >Paja taxi </p>
                    </button>
                    </h5>
                </div>
                <div id="pajataxi" class="collapse" aria-labelledby="taxi4" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontakt: +387331512; +38733412555</p>
                        <p>Adresa: Brajkovac</p>
                    </div>
                 </div>
            </div>    

            <div class="card">
                <div class="card-header" id="taxi5">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#samiriemirtaxi"
                        aria-expanded="false" aria-controls="samiriemirtaxi">
                           <p class= "card-text" >Samir i Emir Taxi </p>
                    </button>
                    </h5>
                </div>
                <div id="samiriemirtaxi" class="collapse" aria-labelledby="taxi5" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontakt: +387331516</p>
                        <p>Adresa: Travnićka 35</p>
                    </div>
                 </div>
            </div> 
            
            <div class="card">
                <div class="card-header" id="taxi6">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#sarajevotaxi"
                        aria-expanded="false" aria-controls="sarajevotaxi">
                           <p class= "card-text" >Sarajevo Taxi </p>
                    </button>
                    </h5>
                </div>
                <div id="sarajevotaxi" class="collapse" aria-labelledby="taxi6" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontakt: +387331515; +38733523156</p>
                        <p>Adresa: Azize Šačirbegović 96</p>
                    </div>
                 </div>
            </div>  
            
            <div class="card">
                <div class="card-header" id="taxi7">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#zutitaxi"
                        aria-expanded="false" aria-controls="zutitaxi">
                           <p class= "card-text" >Žuti taxi </p>
                    </button>
                    </h5>
                </div>
                <div id="zutitaxi" class="collapse" aria-labelledby="taxi7" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontakt: +387331512; +38733412555</p>
                        <p>Adresa: Brajkovac</p>
                    </div>
                </div>
            </div>    

            <div class="card">
                <div class="card-header" id="taxi8">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#holandtaxi"
                        aria-expanded="false" aria-controls="holandtaxi">
                           <p class= "card-text" >Holand Taxi </p>
                    </button>
                    </h5>
                </div>
                <div id="holandtaxi" class="collapse" aria-labelledby="taxi8" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontakt: +387331523; +38780020234</p>
                        <p>Adresa: Avde Palića 14</p>
                    </div>
                </div>
            </div>    

            <div class="card">
                <div class="card-header" id="taxi9">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#adinbenjotaxi"
                        aria-expanded="false" aria-controls="adinbenjotaxi">
                           <p class= "card-text" >Adin Benjo Taxi </p>
                    </button>
                    </h5>
                </div>
                <div id="adinbenjotaxi" class="collapse" aria-labelledby="taxi9" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontakt: +38761210933</p>
                        <p>Adresa: Adema Buće 21</p>
                    </div>
                </div>
            </div>    

            <div class="card">
                <div class="card-header" id="taxi10">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#taxiosam"
                        aria-expanded="false" aria-controls="taxiosam">
                           <p class= "card-text" >Taxi 8 </p>
                    </button>
                    </h5>
                </div>
                <div id="taxiosam" class="collapse" aria-labelledby="taxi10" data-parent="#accordion">
                    <div class="card-body">
                        <p>Kontakt: +38762828928</p>
                        <p>Adresa: Bačarevo Čose 29</p>
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