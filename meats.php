<!DOCTYPE html>
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
        <?php 
            if(!isset($_COOKIE['previous_visit'])) {                
                setcookie("previous_visit", 'Meats', time()+3600*24*30);
            }
            else {
                $visited_string = $_COOKIE['previous_visit'];
                $visited_string = $visited_string.' Meats';       
                setcookie('previous_visit', $visited_string, time()+3600*24*30);                
            }

            /*
            if(!isset($_COOKIE['meat_count'])) {
                $meat_count = 1;
                setcookie('meat_count', $meat_count);                
            }
            else {
                $meat_count = ++$_COOKIE['meat_count'];
                setcookie('meat_count', $meat_count );
            }
            */
        ?>

        <h1 class="site-heading text-center text-white d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3"></span>
            <span class="site-heading-lower">Nature's Dew</span>
        </h1>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
              <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
                  </li>
                  <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
                  </li>
                  <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="secure.php">Store</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <br>
        <div class="left-0 text-center bg-faded p-5 rounded" style="margin:2%">
            <h2 style="float: center">
                <span class="section-heading-lower">Sausages</span>
            </h2>
        </div>
        <div class="left-0 text-center bg-faded p-5 rounded" style="margin:2%">
            <h2 style="float: center">
                <span class="section-heading-lower">Chicken thighs</span>
            </h2>
        </div>
        <div class="left-0 text-center bg-faded p-5 rounded" style="margin:2%">
            <h2 style="float: center">
                <span class="section-heading-lower">Pork ribs</span>
            </h2>
        </div>
        <div class="left-0 text-center bg-faded p-5 rounded" style="margin:2%">
            <h2 style="float: center">
                <span class="section-heading-lower">Lamb chops</span>
            </h2>
        </div>
        <div class="left-0 text-center bg-faded p-5 rounded" style="margin:2%">
            <h2 style="float: center">
                <span class="section-heading-lower">Turkey</span>
            </h2>
        </div>
        <div class="left-0 text-center bg-faded p-5 rounded" style="margin:2%">
            <h2 style="float: center">
                <span class="section-heading-lower">stake patty</span>
            </h2>
        </div>

    </body>
    
</html>