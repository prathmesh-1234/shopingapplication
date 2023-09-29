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
    <!-- <li class="nav-item  dropdown">
          <a class="nav-link  dropdown-toggle  text-white " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="shirt.php">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>  -->
        <button type="button" class="btn btn-dark btn-lg btn-block d-block my-2 dropdown ">
          <a class="nav-link  dropdown-toggle  text-white " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fashion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="shirtpant.php">Shirt</a></li>
            <li><a class="dropdown-item" href="pants.php">Pants</a></li>
            
            <!-- <li><a class="dropdown-item" href="">lehanga</a></li> -->
            <li><a class="dropdown-item" href="sadi.php">sadi</a></li>
          </ul>
        </button>
    <!-- <select class="form-select bg-dark mt-0 text-white" aria-label="Default select example">
        <option selected>Fashion select </option>
        <a href="shirtpant.php" class="nav-link"><option >Shirts </option></a>
        <option value="2"><a href="pants.php" class="nav-link">Pants</a></option>
        <option value="3"><a href="" class="nav-link">combo</a></option>
    </select> -->

    <!-- food section value stored in database using php  -->
    <?php
     include 'pantsumit.php';
    //  if(isset($_POST['exist']))
    //  {
    //     echo '
    //     <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //   <strong>Id is already exist please insert other id of product  </strong> 
    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //   </div>
    //     ';
    //  }
    //  if(isset($_POST['msg']))
    //  {
    //     echo '
    //     <div class="alert alert-success alert-dismissible fade show" role="alert">
    //   <strong>submit successfully </strong> 
    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //   </div>
    //     ';

    //  }

    ?>



    <!-- food scaling form  -->
    <div class="container mt-4 ">
        <div class="container  " style="width: 500px;">
            <form action="pants.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="hidden" name="product_id" class="form-control" id="exampleInputPassword1" value="6">
                    <input type="input" name="pant_brand" class="form-control" id="exampleInputEmail1" placeholder="pant brand">
                </div>
                <div class="mb-3">
                    <input type="input" name="pant_id" class="form-control" id="exampleInputPassword1" placeholder="pant id/product id">

                </div>
                <div class="mb-3">

                    <input type="number" name="pant_quantity" class="form-control" id="exampleInputPassword1" placeholder="pant quantity  ">
                </div>
                <div class="mb-3">
                    <input type="input" name="pant_color" class="form-control" id="exampleInputPassword1" placeholder="pant colors">
                </div>
                <div class="mb-3">
                    <input type="input" name="pant_fabric" class="form-control" id="exampleInputPassword1" placeholder="pant fabric">
                </div>
                <div class="mb-3">
                    <input type="input" name="pant_patter" class="form-control" id="exampleInputPassword1" placeholder="pant patter">

                </div>
                <div class="mb-3">
                    <input type="input" name="pant_specification" class="form-control" id="exampleInputPassword1" placeholder="pant specification ">

                </div>
                <div class="mb-3">
                    <input type="input" name="pant_price" class="form-control" id="exampleInputPassword1" placeholder="pant prices">

                </div>
                <div class="mb-3">
                    <input type="input" name="pant_manufacturing" class="form-control" id="exampleInputPassword1" placeholder="pant manufacturing details">

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
                        <input class="form-check-input" type="checkbox" name="sm" value="28" id="flexCheckChecked" checked>
                        <label class="form-check-label text-white" for="flexCheckChecked">
                            <strong>28</strong>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="m" type="checkbox" value="32" id="flexCheckDefault">
                        <label class="form-check-label text-white" for="flexCheckDefault">
                            <strong>32</strong>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="xl" value="38" id="flexCheckChecked" checked>
                        <label class="form-check-label text-white" for="flexCheckChecked">
                            <strong>38</strong>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="xxl" value="40" id="flexCheckChecked" checked>
                        <label class="form-check-label text-white" for="flexCheckChecked">
                            <strong>40</strong>
                        </label>
                    </div>

                </div>
                <div class="mb-3">
                    <textarea name="pant_decription" id="exampleInputPassword1" class="form-control" placeholder="decription" id="" cols="30" rows="10"></textarea>
                    <!-- <input type="text" class="form-control" name="food_decription" id="" placeholder="decription "> -->
                </div>
                <div class="mb-3">
                    <input type="file" name="pant_photo" class="form-control" id="exampleInputPassword1" placeholder="photos">
                    <span class="text-danger bg-white text-center"><strong>upload only jpg,jpeg,png type photos</strong></span>

                </div>
               
                <button type="submit" name="submit" class="btn btn-primary ">Save</button>
            </form>
        </div>


    </div>

</body>

</html>