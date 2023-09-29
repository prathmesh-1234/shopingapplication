<?php

if  (!isset($_GET['id']))
{ 
  // session_unset();
  // session_destroy();
  // trim($_GET['id'],'?id');
    header("location:main.php?alert=1");

}

// echo $_SESSION["admin"];



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mainpage/admin/user</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    .ptag {
      font-size: large;

    }
    .h1tag {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', 'Arial', ' sans-serif';
    }
   

  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->
  <?php
 include 'navegation.php';
 
  ?>
  <!-- slider -->
  <div class=" d-flex justify-content-center bg-dark slider " style="width: 100%;">

    <div id="carouselExampleInterval" class="carousel slide " style="width: 700px; " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="img1.png" class="d-block w-100 " alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img4.jpg" class="d-block  w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img3.jpg" class="d-block w-100 " alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img5.jpg" class="d-block w-100 " alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- container -->
  <div class=" d-flex flex-row py-3 bg-dark flex-wrap justify-content-center">
    <a href="catagiri.php?page=%fsh%" class="nav-link">
      <div class="card bg-dark text-white d-flex mx-2 " title="click to more infromation" style="width: 350px;">
        <img class="card-img" style=" opacity: 0.5;" src="shoping/shoping3.jpg" alt="">
        <div class="card-img-overlay">
          <h3 class="card-title text-center "><strong>Product scaling </strong> </h3>
          <p class="card-text "><strong>Your product scale effecintly by using click this section .</strong></p>
        </div>
      </div>
    </a>
      <a href="aboutus.php?page=%fsh%"  class="nav-link">
      <div class="card bg-dark text-white d-flex mx-2 " title="click to more infromation" style="width: 350px;">
        <img class="card-img" style=" opacity: 0.5;" src="shoping/shoping4.jpg" alt="">
        <div class="card-img-overlay">
          <h2 class="card-title text-center "><strong><i>About us</i></strong> </h2>
          <p class="card-text "><strong><i>if you have more information about our organization and work of our system.management and fauter plans ,problams and solution </i></strong></p>
        </div>
      </div>
    </a>

    </a>
    <a href="term&polycis.php?page=%&*%$" class="nav-link">
      <div class="card bg-dark text-white d-flex mx-2 " title="click to more infromation" style="width: 350px;">
        <img class="card-img" style=" opacity: 0.5;" src="shoping/shoping1.jpg" alt="">
        <div class="card-img-overlay">
          <h3 class="card-title text-center "><strong>Trem & polycis </strong> </h3>
          <p class="card-text "><strong>All information about polycis trem of orgamization management roles regulation and motive .</strong></p>
        </div>
      </div>
    </a>
   
  </div>

  <div class="container">
    <h1 id="h1tag" class="pt-2">productivity</h1>

    <p id="ptag">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis vero in officia labore atque debitis illo delectus asperiores autem reprehenderit quas minima ipsam quis repellat at deleniti harum soluta laborum, veniam ut fugiat nisi nulla! Doloremque reiciendis dicta, cupiditate adipisci saepe voluptate optio? Suscipit neque quae voluptatibus reprehenderit rerum magni rem, id veniam pariatur facere doloribus nostrum atque culpa ullam tempore a quod odit ipsa eum inventore ratione dolorum fugit obcaecati. Architecto facere at nihil repudiandae. Vero nam, doloribus nostrum exercitationem consectetur illum fuga distinctio natus magni! Deserunt, accusamus ex perferendis saepe, sapiente magnam eius fugiat qui incidunt quisquam commodi?
    </p>
    <br>
    <h1 id="h1tag" >infromation</h1>
    <p id="ptag">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nemo qui modi dolores explicabo accusantium distinctio odit suscipit, culpa quam harum non consequuntur labore nostrum. Perferendis quas cumque qui mollitia obcaecati quis facilis beatae rem molestias in incidunt, fugit vel vero dicta reiciendis aperiam quae itaque repellat a quod! Corrupti commodi molestiae, voluptas dignissimos incidunt, repellat vero nulla delectus facere accusamus earum, cumque placeat quisquam eligendi eum dolorum obcaecati? Ipsa repellat magnam illum repellendus iste ipsam dignissimos. Deleniti incidunt vitae ipsam porro aspernatur voluptate quaerat voluptatem esse, quo culpa consequatur veniam sunt autem voluptas et earum exercitationem neque eaque nostrum magni vel. Eveniet debitis hic, vitae iure minima molestias et quasi quidem quam quisquam dolor sunt unde tempore obcaecati ipsum magnam enim error quas dolore amet laudantium voluptatibus distinctio tempora. Veniam qui quis, reprehenderit corrupti eligendi vitae ipsam unde praesentium doloribus, quidem soluta deleniti, voluptate porro. Quo accusantium consectetur nam?</p>
  </div>

  <!-- footer  -->
  <?php
  include 'footer.php'
  ?>
</body>

</html>