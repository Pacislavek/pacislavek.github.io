<html lang="pl">

<head>
  <!-- meta -->
  <title>Web006 - Szablon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Patryk Kowalski | pacislavek@gmail.com">
  <meta name="description" content="Szablon strony dla studia kreatywnego.">
  <meta http-equiv="Cache-control" content="public">
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <!-- og meta -->
  <meta property="og:title" content="Web006 - Szablon" />
  <meta property="og:url" content="" />
  <meta property="og:description" content="Szablon strony dla studia kreatywnego." />
  <meta property="og:image" content="" />
  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Roboto:wght@300;400;500;700&family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <!-- css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/global.css">
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/waves.css" />
  <link rel="stylesheet" type="text/css" href="css/timeline.css" />
</head>

<body data-spy="scroll" data-target="#sideMenu" data-offset="100">

  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="#"><img src="media/logo.png" alt="logo" class="img-fluid" width="180px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-4 mr-auto">
        <a class="nav-link" href="index.php#navbar">Strona Główna</a>
        <a class="nav-link" href="oferta.php">Oferta</a>
        <a class="nav-link" href="realizacje.php">Realizacje</a>
        <a class="nav-link active" href="#">Kontakt</a>
      </div>
      <span class="navbar-text d-none d-lg-flex mr-5">
        <i class="fab fa-behance-square ml-2"></i>
        <i class="fab fa-linkedin ml-2"></i>
        <i class="fab fa-facebook-square ml-2"></i>
        <i class="fas fa-phone-square-alt mx-2"></i>
        809 279 294
      </span>
    </div>
  </nav>

  <div id="particles-js"></div>

  <section id="contactt">
    <div class="container">
      <div class="row my-5 py-5 bghere">
        <h2 class="h2 w-100 text-center mt-5">Skontaktuj się z nami</h2>

        <div class="col-lg-8">
          <!-- Default form contact -->
          <form class="text-center p-5" action="#!">

            <p class="h4 mb-4">Formularz kontaktowy</p>

            <!-- Name -->
            <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Imię i nazwisko">

            <!-- Email -->
            <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

            <!-- Subject -->
            <label>Temat:</label>
            <select class="browser-default custom-select mb-4">
              <option value="" disabled>Wybierz opcję:</option>
              <option value="1" selected>Kontakt</option>
              <option value="2">Zgłoś problem</option>
              <option value="3">Wycena</option>
            </select>

            <!-- Message -->
            <div class="form-group">
              <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Wiadomość"></textarea>
            </div>

            <!-- Copy -->
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
              <label class="custom-control-label" for="defaultContactFormCopy">Wyślij mi kopię tej wiadomości</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit">Wyślij</button>

          </form>
          <!-- Default form contact -->
        </div>



        <div class="col-lg-4 py-5 d-flex flex-column justify-content-center">
         <p class="h4 mb-4">Dane kontaktowe</p>
          <p class="p"><i class="fas fa-phone"></i> <span class="text-muted">+48</span> 709 739 254</p>
          <p class="p"><i class="fas fa-phone"></i> <span class="text-muted">+48</span> 459 729 154</p>


          <p><i class="fas fa-envelope"></i> agencystrong@studiokreatywne.pl</p>

            <p><i class="fas fa-envelope"></i> biuro@studiokreatywne.pl<br></p>
        </div>


      </div>
    </div>
  </section>

  <!-- SCRIPTS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="js/main.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/submenu.js"></script>
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>

  <script>
    AOS.init();

  </script>
</body>


</html>
