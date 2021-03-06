<!DOCTYPE html>
<?php 

if (!isset($_COOKIE['previous_visit'])) {  
  setcookie('previous_visit', '', time()+3600*24*30, '/');
}
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>
  

  <body>

    <div style="background-image:url('img/Fresh-Vegetables-Background.jpg'); filter: blur(8px); -webkit-filter: blur(8px); height: 100%;"></div>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Nature's Dew</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="secure.php">Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="left-0 text-center bg-faded p-5 rounded" style="margin:1%">
      <h1> Last visited Product </h1>
      <?php 
        if(isset($_COOKIE['previous_visit'])) {
          $visited_array = array_reverse(explode(" ", $_COOKIE['previous_visit']));
          echo $visited_array[0];
        }                                      
      ?>
      <br><br>
    </div>
    <div class="left-0 text-center bg-faded p-5 rounded" style="margin:1%">
      <h1> Most visited product </h1>
      <?php
        if (isset($_COOKIE['previous_visit'])) {
          $visited_array = explode(" ", $_COOKIE['previous_visit']);
          $max_visit = array_count_values($visited_array);
          arsort($max_visit);
          foreach($max_visit as $key => $value) {
            echo $key;
            break;         
          }
        }     
        
      ?>
    </div>
    
    <section class="page-section">      
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <a href="vegies.php">
                <h2 class="section-heading mb-0">
                  <span class="section-heading-upper">Farm Fresh</span>
                  <span class="section-heading-lower">Fruits and Vegetables</span>
                </h2>
              </a>              
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/vegetable_bundle.jpg" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">If fresh fruits and vegetables is what you are looking for, you will not be dissapointed with what we have to offer. Batches of produce arrive our store every morning, which are right off the farm and wet with morning due.</p>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex mr-auto rounded">
              <a href="dairy.php">
                <h2 class="section-heading mb-0">
                  <span class="section-heading-upper">Mooo to You</span>
                  <span class="section-heading-lower">Dairy Products</span>
                </h2>
              </a>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/dairy.jpg" alt="">
          <div class="product-item-description d-flex ml-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">We provide a wide variety of dairy products which are delicious, packed with nourishment and minimally processed.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <a href="meats.php">
                <h2 class="section-heading mb-0">
                  <span class="section-heading-upper">Meat and Deli</span>
                  <span class="section-heading-lower">Fine cuts, just for you</span>
                </h2>
              </a>              
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/meat_products.jpg" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">A multiplicity of fine meat cuts are available at our store. These meats come from pastured animals, which are free-range and raised without hormones.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5" style="background-color:rgba(76, 148, 58, 0.9)">
      <div class="container">
        <p class="m-0 small">By Anand Kumar. Bootstrap template used</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
