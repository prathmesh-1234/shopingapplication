<?php
 session_start();
 if(!isset($_SESSION["admin"]))
 {
    header("location:main.php?alert");
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
        body {
            background-image: url("icons/background.jpg");
        }

        h1 {
            font-family: 'Lobster', cursive;
            text-align: center;
            background: wheat;
        }
        .st:hover {
            font-size: large;
        }
    </style>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>





    <!-- heading  -->
    <h1 id="h1">WELCOME to short pand scaling section</h1>
    <button type="button" class="btn btn-dark btn-lg btn-block d-block my-2 dropdown ">
          <a class="nav-link  dropdown-toggle  text-white " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fashion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="shirtpant.php" title="shirt information ">Shirt</a></li>
            <li><a class="dropdown-item" href="pants.php" title="pant information">Pants</a></li>
            <!-- <li><a class="dropdown-item" href="" title="lehanga">lehanga</a></li> -->
            <li><a class="dropdown-item" href="sadi.php" title="sadi">sadi</a></li>
          </ul>
        </button>

    <!-- food section value stored in database using php  -->
    <?php
    
   if(isset($_GET['msg']))
   {
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>submited  </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
   }
   if(isset($_GET['exist']))
   {
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>id is already exist of short please insert other id   </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
   }
   include 'shirt.php';
    ?>


    <!-- food scaling form  -->
    <div class="container mt-4 ">
        <div class="container  " style="width: 500px;">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="hidden" name="product_id" class="form-control" id="exampleInputPassword1" value="5">
                    <input type="input" name="short_brand" class="form-control" id="exampleInputEmail1" placeholder="short brand">
                </div>
                <div class="mb-3">
                    <input type="input" name="short_id" class="form-control" id="exampleInputPassword1" placeholder="short id/product id">

                </div>
                <div class="mb-3">

                    <input type="number" name="short_quantity" class="form-control" id="exampleInputPassword1" placeholder="short quantity  ">
                </div>
                <div class="mb-3">
                    <input type="input" name="short_color" class="form-control" id="exampleInputPassword1" placeholder="short colors">
                </div>
                <div class="mb-3">
                    <input type="input" name="short_fabric" class="form-control" id="exampleInputPassword1" placeholder="short fabric">
                </div>
                <div class="mb-3">
                    <input type="input" name="short_patter" class="form-control" id="exampleInputPassword1" placeholder="short patter">

                </div>
                <div class="mb-3">
                    <input type="input" name="short_specification" class="form-control" id="exampleInputPassword1" placeholder="short specification">

                </div>
                <div class="mb-3">
                    <input type="input" name="shirtpant_price" class="form-control" id="exampleInputPassword1" placeholder="short price">
                </div>
                <div class="mb-3">
                    <input type="input" name="short_manufacturing" class="form-control" id="exampleInputPassword1" placeholder="shirt manufacturing details">

                </div>
                <div class="form-check">
                        <input class="form-check-input" name="mela" type="checkbox" value="mela" id="flexCheckDefault">
                        <label class="form-check-label text-white" for="flexCheckDefault">
                            <strong>Mela</strong>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="female" value="female" id="flexCheckChecked" checked>
                        <label class="form-check-label text-white" for="flexCheckChecked">
                            <strong>female</strong>
                        </label>
                    </div>
                <div class="mb-3">
                    <input type="input" name="orgnizing_contry" class="form-control" id="exampleInputPassword1" placeholder="contry organizing/contry name">

                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sm" value="sm" id="flexCheckChecked" checked>
                        <label class="form-check-label text-white" for="flexCheckChecked">
                            <strong>SM</strong>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="m" type="checkbox" value="m" id="flexCheckDefault">
                        <label class="form-check-label text-white" for="flexCheckDefault">
                            <strong>M</strong>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="xl" value="xl" id="flexCheckChecked" checked>
                        <label class="form-check-label text-white" for="flexCheckChecked">
                            <strong>XL</strong>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="xxl" value="xxl" id="flexCheckChecked" checked>
                        <label class="form-check-label text-white" for="flexCheckChecked">
                            <strong>XxL</strong>
                        </label>
                    </div>

                </div>
                <div class="mb-3">
                    <textarea name="short_decription" id="exampleInputPassword1" class="form-control" placeholder="decription" id="" cols="30" rows="10"></textarea>
                    <!-- <input type="text" class="form-control" name="food_decription" id="" placeholder="decription "> -->
                </div>
                <div class="mb-3">
                    <input type="file" name="short_photo" class="form-control" id="exampleInputPassword1" placeholder="photos">
                    <span class="text-danger bg-white text-center"><strong>upload only jpg,jpeg,png type photos</strong></span>

                </div>
               
                <button type="submit" name="submit" class="btn btn-primary ">Save</button>
            </form>
        </div>


    </div>

</body>

</html>