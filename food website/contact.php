
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
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <h1 style="color: white;">Food hut</h1>
    <div class="collapse navbar-collapse" id="navbarsExample">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php" onclick="return ReloadPage();"> &emsp;&emsp;  &emsp; &emsp; &emsp; &emsp;Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php" onclick="return ReloadPage();"> About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="menu.php" onclick="return ReloadPage();">Menu</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="order.php" onclick="return ReloadPage();">Order</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="reviews.php" onclick="return ReloadPage();">Reviews</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php" >Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  </div>
  <!-- ---------------contact us---------- -->
  <div id="contact" class="container-fluid wow fadeIn">
    <div class="row">
      <div class="col-lg-6 has-img-bg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58018.183246558045!2d68.80213565691791!3d24.653431084302692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394dd9c126445483%3A0x65e0831b1b5d1246!2sBadin%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1700915387062!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-6">
        <div class="row justify-content-center">
          <div class="col-sm-8 ">
            <h2 class="mb-4">Find Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur earum ducimus facilis, qui ad corrupti corporis, nisi perspiciatis possimus quaerat eos temporibus cum libero dolore aperiam molestiae quibusdam ratione nam?
              
          </div>
        </div>
      </div>
    </div>
   
  </div>


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

  
</body>
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