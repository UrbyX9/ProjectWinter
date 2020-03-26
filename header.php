<!DOCTYPE html>
<html>
  <?php include('./includes/dbh.inc.php'); ?>
  <head>
    <meta charset="utf-8" content="text/html">
    <meta name="viewport" content="width=device-width, intital-scale=1.0">

    <!-- jQuery and Propper.js-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/esm/popper-utils.js" 
      integrity="sha256-5svdPV/pJHGKdkwy2zo8jfH1925FafkffDDabT2cEBk=" 
      crossorigin="anonymous"></script>

    <!-- bootstrap links -->
      <!-- CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- JavaScript link -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Winter Claw</title>
  </head>

  <body>
    <!--<header>-->
    <header>
    <div class="banner"><img src="./img/animals-2222007_1920.jpg" alt="banner"></div>
    </header>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Winter Claw</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="./index_test.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <!-- sub dropdown -->
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Submenu</a></li>
                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                  <!-- sub sub dropdown -->
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                    <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                    <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                  </ul>
                </li>
              </ul>

            <!--
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div> -->

          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index_test.php?page=products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Aobut Us</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container-fluid">