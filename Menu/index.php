<?php
include("conn.php");
GetMenu();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Menu</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: "Times New Roman", Georgia, Serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Playfair Display";
      letter-spacing: 5px;
    }
  </style>
</head>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
      <a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a>
      <!-- Right-sided navbar links. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">About</a>
        <a href="#menu" class="w3-bar-item w3-button">Menu</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="w3-image" src="images/top.webp" width="1600" height="800">
    <div class="w3-display-bottomleft w3-padding-large w3-opacity">
      <h1 class="w3-xxlarge">Le Catering</h1>
    </div>
  </header>

  <!-- Page content -->
  <div class="w3-content" style="max-width:1100px">

    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
      <div class="w3-col m6 w3-padding-large w3-hide-small">
        <img src="images/food.jpg" class="w3-round w3-image w3-opacity-min" width="600" height="750">
      </div>

      <div class="w3-col m6 w3-padding-large">
        <h1 class="w3-center">About Catering</h1><br>
        <h5 class="w3-center">Tradition since 1889</h5>
        <p class="w3-large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
        <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>

    <hr>

    <!-- Menu Section -->
    <div class="container">
      <div class="row">
        <?php
        while ($row = $result->fetch_assoc()) {
          echo "
        <div class='col-4'>
        <div class='card' style='width: 22rem;'>
          <img src='images/" . $row["img"] . "' class='card-img-top width='22rem' height='200px''>
            <div class='card-body'>
              <h5 class='card-title'>" . $row["Nombre"] . "</h5>
              <p class='card-text'>" . $row["Descripcion"] . "</p>
              <div class='d-flex justify-content-center'>
                <a href='https://wa.me/526141920980?text=Deseo%20mas%20informacion%20sobre%20" . $row["Nombre"] . "' class='btn btn-primary' target='blank'>Contactanos</a>
              </div>
            </div>
            <div class='card-footer d-flex justify-content-center'>
              <img src='https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=" . $row["SKU"] . "'>
            </div>
        </div>
        </div>";
        }
        ?>
      </div>
    </div>

    <hr>
    <!-- End page content -->
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-light-grey w3-padding-32">

  </footer>

</body>

</html>