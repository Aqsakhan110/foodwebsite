<?php include("connection.php");



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {

    // Order data insert

    if(isset($_POST['submit']))
    {
      $sql = "INSERT INTO orders(cust_name,cust_email, order_items, customer_address, quantity_order)
      VALUES  ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["food"]."','".$_POST["add"]."','".$_POST["qty"]."')";

      $result = mysqli_query($conn,$sql);

    }
   
    // Select dish names
    $dish_query = "SELECT dish_name FROM menu";
    $dishes_array = mysqli_query($conn,$dish_query);
    
    
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
          <a class="nav-link" href="index.php" onclick="return ReloadPage();">&emsp;&emsp; &emsp; &emsp; &emsp; &emsp; Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php" onclick="return ReloadPage();">About </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="menu.php" onclick="return ReloadPage();">Menu</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="order.php" >Order</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="reviews.php" onclick="return ReloadPage();">Reviews</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php"onclick="return ReloadPage();">Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  </div>


  <!-------------------order form------------------- -->
  <div class="container">
  <div class="row" >
    <div class="col-md-3"></div>

    <div class="col-md-6">
    <h1 style=" padding-top:3rem;"> Order your Meal</h1>

    <p> Create your orders and pick up appointment </p>

    <!-- 
      POST data to order page and check submit name (php)
      Onsubmit js event alert
     -->
        <form id="formdesign" method="post" action="order.php" onsubmit="alert('Your order has been placed.');">
          <br><br>
          <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="name" required>

          <br>
          <br>
          <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

      <br><br>
            <label for="add"><b>Address</b></label>
            <input type="text" placeholder="Enter Adress" name="add" required>
            <br><br>
            <label for="cars">Choose item:</label>

            <!----------------- Food Items   ------------------------>
            <select name="food" id="foods">
          <?php 
              while($dishes = mysqli_fetch_assoc($dishes_array)) {
                echo '<option value="' .$dishes['dish_name'] . '">' . $dishes['dish_name'] . '</option>';
              }

        
          ?>
            </select>
        
            <br><br>
            <label for="quantity"><b>Select quantity</b></label>
            <input type="text" placeholder="Enter quantity" name="qty" required>
            <br><br>

            <input type="submit" class="btn btn-lg btn-dark" name="submit" id="rounded-btn" value="Place Order">
        </form>
        </div>
      <div class="col-md-3"></div>
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