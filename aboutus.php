<?php
if(!isset($_GET['page']))
{
    header("location:main.php?alert=1");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage/admin/user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- h1 font size  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>

    </style>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->

    <?php
    include "navegation.php";
    ?>

    <div>


        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3050">
                    <img src="aboutimg/about1.jpg" height="350px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <span class="bg-primary h5">We provoid best seirves</span><br>
                        <span class="bg-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, maiores.</span>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3050">
                    <img src="aboutimg/about2.jpg" height="350px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white ">
                        <span class="bg-primary h5">We provoid 24 Hours coustemer support</span><br>
                        <span class="bg-primary">give me your fildback </span>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3050">
                    <img src="aboutimg/about3.jpg" height="350px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <span class="bg-primary h5">We provoide best product for you</span><br>
                        <span class="bg-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, neque.</span>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </div>
    <div class="container my-3">
        <h2><b> About us</b></h2>
        <p><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, nesciunt omnis accusamus incidunt aperiam ipsum animi deleniti debitis natus eaque expedita architecto iure, asperiores perferendis, vel provident ipsam aliquid quos assumenda deserunt unde repellat optio tempore dicta. Accusantium nihil provident rerum dignissimos, porro vitae expedita maxime amet sequi earum deleniti totam, iusto odio error sint, architecto nemo? Beatae quo excepturi officia voluptatibus quasi distinctio, iste qui impedit ipsa? Libero ipsam consequuntur, officiis quasi, quidem iusto unde quisquam fugiat assumenda consectetur cum, reiciendis omnis saepe nisi dignissimos expedita non possimus earum reprehenderit delectus blanditiis tempora deserunt iste facere! Deserunt accusamus, a soluta in assumenda iste facilis modi quibusdam placeat qui deleniti inventore, ipsam perspiciatis quia dolorem. Et sunt architecto culpa sint facilis deserunt repellendus eveniet rerum magni repellat recusandae, laboriosam eum neque provident, distinctio natus? Consequatur placeat, molestiae fugit non veritatis ratione odio! Similique soluta quam quod suscipit nihil, optio voluptatem ad esse commodi voluptates maiores ducimus fuga molestias, sint delectus placeat, earum nemo inventore. Laudantium, animi deleniti praesentium, fugiat culpa neque ea temporibus quas sed officiis ipsum nobis repellat aspernatur, optio cum laboriosam ducimus distinctio. Cum laborum vitae, alias, accusantium non necessitatibus eos distinctio, itaque natus officia facilis expedita deleniti!</strong></p>
        <h2 class="mt-2"><b>more infromation about us</b></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita vitae nesciunt commodi laudantium, saepe modi voluptatum cupiditate cumque animi nobis inventore doloremque possimus dolorum, id iusto odio atque culpa esse suscipit consequuntur autem odit quas quod? Aperiam doloribus temporibus alias laborum qui non cum accusantium, ipsa odit ipsam nihil perferendis nulla ad, mollitia fuga. Quo cum iste maxime error beatae itaque, laboriosam reprehenderit dolor excepturi, voluptate tempora, porro explicabo quibusdam.
        </p>

    </div>


    <div class="mb-0 bg-dark ">
    <footer>
      <div class="container ">
    
      <div class=" d-flex flex-row  py-3 ml-2  justify-content-center">
        
        <div>
          <a href="https://www.facebook.com">
          <img src="icons/ficon.png" class="rounded-circle " width="18%">
          </a>
          
        </div>
        <div>
          <img src="icons/wicon.png" class="rounded-circle " width="18%">
        </div>
        <div>
        <a href="https://www.instagram.com/">
          <img src="icons/iicon.jpg" class="rounded-circle " width="18%">
          </a>
        </div>
        <div>
          <a href="https://in.linkedin.com/">
          <img src="icons/licon.png" class="rounded-circle " width="18%">
          </a>
        </div>
        <div>
        <a href="https://twitter.com/">
          <img src="icons/tion.png" class="rounded-circle " width="18%">
        </a>
        </div>

      </div>

      <!-- table  -->
      <div class="mt-3 mb-3">
        <table class="table table-dark table-borderless text-center ">
          <thead>
            <tr>
              <th scope=" col">pkweb@mypage.com</th>
              <th scope="col">Products</th>
              <th scope="col">Infromation</th>
              <th scope="col">Resources</th>
              <th scope="col">Contact </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lorem ipsum dolor sit amet.</td>
              <td>fashion</td>
              <td>product</td>
              <td>conpo</td>
              <td>mumbai east IT park,</td>
            </tr>
            <tr>
              <td>Lorem ipsum dolor sit amet consectetur.</td>
              <td>growseires</td>
              <td>settings</td>
              <td>prer</td>
              <td>Mharastra 431515 India</td>
            </tr>
            <tr>
              <td>Lorem ipsum dolor sit.</td>
              <td>electronic</td>
              <td></td>
              <td></td>
              <td>+91-9325295194</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
    </footer>
  </div>







</body>

</html>