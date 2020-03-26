<?php
include'./includes/dbh.inc.php';
/*
function pdo_connect_mysql(){
    /* credentials */
    /*$dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'winter_claw';

    try{
        return new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName . ';charset=utf8', $dbUser, $dbPass);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }
}*/

function template_header($title){
  $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
    echo <<<EOT

    <!DOCTYPE html>
<html>

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
    <div class="banner"><img src="https://via.placeholder.com/1900x250" alt="banner"></div>
    </header>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Winter Claw</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
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
            <a class="nav-link" href="./index.php?page=products">Products</a>
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
    
    <!-- Cart icon and display of number of articles in the cart -->
    <div class="link-icons">
    <a href="index.php?page=cart">
    <i class="fa fa-shopping-cart"></i>
    <span>$num_items_in_cart</span>
    </a>
    </div>

    </nav>

    <div class="container-fluid">

    
EOT;
}

function template_footer(){
    ECHO <<<EOT

    </div> <!-- container-fluid -->
    <!-- end of body tag from header -->
  
    <footer class="flow-footer" role="contentinfo">
      <!--
      <div class="section">
        <ul> Section
          <li>item</li>
          <li>item</li>
          <li>item</li>
          <li>item</li>
          <li>item</li>
        </ul>
      </div>
  
      <div class="section">
        <ul> Section
          <li>item</li>
          <li>item</li>
          <li>item</li>
          <li>item</li>
          <li>item</li>
        </ul>
      </div>
  
      <div class="section">
        <ul> Section
          <li>item</li>
          <li>item</li>
          <li>item</li>
          <li>item</li>
          <li>item</li>
        </ul>
      </div>
    -->
  <!--
      <div class="wrapp">
        <div class="modul">
          <div class ="modul-inner">
            <h3><a href="#">Contacts</a></h3>
            <p>
              <ul>
                <li>Phone: XXX-XXX-XXX</li>
                <li>E-mail: <a href="mailto:klinc.urban97@gmail.com">shop.contact@winter.com</a></li>
                <li></li>
              </ul>
            </p>
          </div>
        </div>
  
        <div class="modul">
          <div class ="modul-inner">
  
          </div>
        </div>
  
        <div class="modul">
          <div class ="modul-inner">
          Six started far placing saw respect females old. Civilly why how end viewing attempt related enquire visitor. Man particular insensible celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if. She jointure goodness interest debating did outweigh. Is time from them full my gone in went. Of no introduced am literature excellence mr stimulated contrasted increasing. Age sold some full like rich new. Amounted repeated as believed in confined juvenile. 
          </div>
        </div>
      </div>-->
  <!--
      <div class="copy-right">
  xdcfvtgzhhujnimko,
      </div>-->
  
      <div class="footer-wrapper"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
  
              <!--Column-->
              <div class="footer-pad">
                <h4>Heading 1</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Payment Center</a></li>
                  <li><a href="#">Contact Directory</a></li>
                  <li><a href="#">Forms</a></li>
                  <li><a href="#">News and Updates</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li></li>
                </ul>
              </div>
            </div>
            <!-- Column end -->
            <hr>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <!--Column-->
              <div class="footer-pad">
                <h4>Heading 2</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Website Tutorial</a></li>
                  <li><a href="#">Accessibility</a></li>
                  <li><a href="#">Disclaimer</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Webmaster</a></li>
                </ul>
              </div>
            </div>
            <!-- Column end -->
  
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <!--Column-->
              <div class="footer-pad">
                <h4>Heading 3</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Parks and Recreation</a></li>
                  <li><a href="#">Public Works</a></li>
                  <li><a href="#">Police Department</a></li>
                  <li><a href="#">Fire</a></li>
                  <li><a href="#">Mayor and City Council</a></li>
                  <li></li>
                </ul>
              </div>
            </div>
            <!-- Column end -->
  
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <h4>Follow Us</h4>
              <ul class="social-network social-circle">
                <li><a href="https://www.facebook.com" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com" target="_blank" class="icoYoutube" title="Youtube"><i class="fa fa-youtube"></i></a></li>    
                <li><a href="https://twitter.com" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              </ul>				
            </div>
          </div>
        <div class="row">
          <div class="col-12 copy">
            <p class="text-center">&copy; Copyright 2020 - Winter Claw.  All rights reserved.</p>
          </div>
        </div>
  
        </div>
      </div><!-- footer-wrapper -->
  
    </footer>
  
    </body>
  
  </html>
  

EOT;
}

?>