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
    <style>
        body{
            background-image: url("icons/background.jpg");
        }
    </style>
   
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->
<?php
include "navegation.php";

?>

<div class="container d-flex flex-column py-3 ml-2 justify-content-center mt-5 ">
    
<button type="button" class="btn btn-dark btn-lg btn-block d-block my-2"><a href="food.php?myfood=$#%^&#*@" class="nav-link">Food</a></button>
<button type="button" class="btn btn-dark btn-lg btn-block d-block my-2 dropdown">
          <a class="nav-link  dropdown-toggle  text-white " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Electronic
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="mobile.php?mobile=/14!$@%**">Mobiles</a></li>
            <li><a class="dropdown-item" href="laptop.php">Laptops</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="">Pc</a></li>
            <li><a class="dropdown-item" href=""></a></li>
          </ul>
        </button>
        <button type="button" class="btn btn-dark btn-lg btn-block d-block my-2 dropdown">
          <a class="nav-link  dropdown-toggle  text-white " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fashion
          </a>
          <ul class="dropdown-menu bg-dark ">
            <li><a class="dropdown-item text-white" href="shirtpant.php">shorts</a></li>
            <li><a class="dropdown-item text-white" href="pants.php">Pants</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item text-white" href="sadi.php">Sadi</a></li>
            <!-- <li><a class="dropdown-item text-white" href="">Sadi</a></li> -->
          </ul>
        </button>        


</div>



    
</body>
</html>
      
