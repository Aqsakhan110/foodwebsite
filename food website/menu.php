<?php include("connection.php");



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
  
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">\

    <title>Food Hut</title>
    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <h1 style="color: white;">Food hut</h1>
        <div class="collapse navbar-collapse" id="navbarsExample">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" onclick="return ReloadPage();"> &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php" onclick="return ReloadPage();">About </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="order.php" onclick="return ReloadPage();">Order</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="reviews.php" onclick="return ReloadPage();">Reviews</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php" onclick="return ReloadPage();">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" id="row1img">
                <h1>Our Menu List</h1><br>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- ----------row1---------- -->
        <div class="row" >

            
            <!-- -----------1----- -->
            <div class="col-md-4">
                <img src="./images/menuimg1.jpg" class="card-img1" alt="image"
                    style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>

                    <div class="d-flex justify-content-between align-items-center">
                    Price =500
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="order.php">Order Now</a></button>

                        </div>

                    </div>
                </div>
            </div>
            <!-- -----2--- -->
            <div class="col-md-4">
                <img src="./images/menuimg2.jpg" class="card-img1" alt="image"
                    style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                       
                    <div class="d-flex justify-content-between align-items-center">
                    Price =1500
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="order.php">Order Now</a></button>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="./images/menuimg3.jpg" class="card-img1" alt="image"
                    style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    Price =1000
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="order.php">Order Now</a></button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- --------------row2--------- -->
        <div class="row">
            <!-- -----------1----- -->
            <div class="col-md-4">
                <img src="./images/menuimg4.jpg" class="card-img1" alt="image"
                    style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    Price =750
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="order.php">Order Now</a></button>


                        </div>

                    </div>
                </div>
            </div>
            <!-- -----2--- -->
            <div class="col-md-4">
                <img src="./images/menuimg5.jpg" class="card-img1" alt="image"
                    style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    Price =2500
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="order.php">Order Now</a></button>


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="./images/menuimg6.jpg" class="card-img1" alt="image"
                    style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    Price =1250
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="order.php">Order Now</a></button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>



      <!-- ----------------footer---------- -->

  <div class="container  "  >
  <footer class="d-flex   py-3 my-4 border-top">
    <p class="col-md-4 text-muted"><b>© 2022 Company, Food Hut</b></p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end  ">
      <li class="nav-item active"><a href="index.php" class="nav-link px-2 text-muted  "><b>Home</b></a></li>
      <li class="nav-item active"><a href="about.php" class="nav-link px-2 text-muted"><b>About</b></a></li>
      <li class="nav-item active"><a href="menu.php" class="nav-link px-2 text-muted"><b>Menu</b></a></li>
      <li class="nav-item active"><a href="order.php" class="nav-link px-2 text-muted"><b>Order</b></a></li>
      <li class="nav-item  active"><a href="contact.php" class="nav-link px-2 text-muted"><b>About</b></a></li>
    </ul>
  </footer>

  
    <script>
function ReloadPage() {
 
  if (confirm("Do you want to leave the page?")) {
    return true;
  } else {
   return false;
  }
}
</script>


</html>

<?php } ?>