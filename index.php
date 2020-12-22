<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SAobraćaj.ba</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="/css/global-styles.css">
  <link rel="stylesheet" href="/css/homepage-style.css"/>

  <!-- Material Design Bootstrap CSS -->
  <link rel="stylesheet" href="/css/mdb.min.css">

</head>

<body>

  <!-- Navigation -->
  <?php include "common/navbar.html"; ?>

  <!-- Content -->
  <section id="welcomeSection" class="parallax-window" data-parallax="scroll" data-image-src="files/images/sarajevo.jpg">
    <div class="container overflow-hidden viewport-match">
      <div class="row h-100 head-container">
        <div class="col-12">
          <div class="ml-auto text-white">
            <div class="container text-center">
              <h1 class="brand-name mb-0">SAobraćaj.ba</h1>
              <p class="brand-description mb-0">Svi putevi vode u Sarajevo</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white-transparent welcome-container">
      <div class="container">
        <div class="row container">
          <div class="welcome-center col-md-10">
            <div class="welcome-left">
              <h2 class="welcome-title">Dobro došli na našu stranicu!</h2>
              <p>
                Na našoj stranici možete pronaći sve potrebne informacije vezane za saobraćaj u najljepšem gradu. Uživajte!</p>
            </div>
          </div>

          <div class="col-md-2">
            <div class="h-100 d-flex flex-column justify-content-center align-items-center text-center">
              <a href="novosti"><i class="fas fa-4x fa-address-card p-3 welcome-icon"></i></a>
              <p>
                 Stanje na putevima
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="trafficSection" class="parallax-window" data-parallax="scroll" data-image-src="/files/images/saobracaj.jpg">
    <div class="container">
      <div class="row">
        <div class="traffic-items-container">
            <div class="traffic-item col-md-4 w-100 d-flex flex-column justify-content-center align-items-center text-center">
              <i class="fas fa-5x fa-car traffic-item-icon"></i>
              <p class="mb-0">
                Sarajevo je prvi grad u Bosni i Hercegovini po broju registrovanih vozila i on iznosi blizu 150 000.
              </p>
            </div>

            <div class="traffic-item col-md-4 w-100 d-flex flex-column justify-content-center align-items-center text-center">
              <i class="fas fa-5x fa-plane traffic-item-icon"></i>
              <p class="mb-0">
                Aerodrom u Sarajevu koristi 20 aviokompanija. BiH je nekada imala i svoju aviokompaniju (prvo BH Airlines pa FlyBosnia). 
              </p>
            </div>

            <div class="traffic-item col-md-4 w-100 d-flex flex-column justify-content-center align-items-center text-center">
              <i class="fas fa-5x fa-tram traffic-item-icon"></i>
              <p class="mb-0">
                Željeznička stanica u Sarajevu otvorena je u proljeće 1953. godine. I dan danas radi punom snagom, povezujući gradove BiH.
              </p>
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
  <script src="/js/parallax.min.js"></script>

</body>

</html>