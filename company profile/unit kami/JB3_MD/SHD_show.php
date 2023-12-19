<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Information</title>
  </head>
  <body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #93e0c9">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://localhost/company%20profile/">
            <p style="font-family: Padaloma; font-size: 12; color: #094060;">BPJ PARIWISATA</p>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://localhost/company%20profile/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Tentang Kami</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Armada Kami
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://localhost/company%20profile/unit%20kami/Catalogue.html">Pilihan Armada Kami</a></li>
                  <li><a class="dropdown-item" href="https://localhost/company%20profile/unit%20kami/JB3_SDD/Double-decker.php">Big bus</a></li>
                  <li><a class="dropdown-item" href="#">Medium Bus and Micro Bus</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Carreer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--NAVBAR END-->
      <br>
      <br>
      <br>
    <!--KONTAK PANGGIL METOD-->
    <div id="metod">
      Name : <?php echo $_GET["nama"]; ?>
    <br>
    Email  : <?php echo $_GET["email"]; ?>
    </div>

    <style>
      #metod {
        text-align: justify;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 40px;
        padding: 50px;
      }
    </style>
    <!--KONTAK PANGGIL METOD END-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
