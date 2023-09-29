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
    <h1 id="h1">WELCOME to sadi scaling section</h1>
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
    include 'sadisubmit.php';
    ?>

    <!-- food scaling form  -->
    <div class="container mt-4 ">
        <div class="container  " style="width: 500px;">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="hidden" name="product_id" class="form-control" id="exampleInputPassword1" value="7">
                    <input type="input" name="sadi_brand" class="form-control" id="exampleInputEmail1" placeholder="sadi brand">
                </div>
                <div class="mb-3">
                    <input type="input" name="sadi_id" class="form-control" id="exampleInputPassword1" placeholder="sadi id/product id">

                </div>
                <div class="mb-3">

                    <input type="number" name="sadi_quantity" class="form-control" id="exampleInputPassword1" placeholder="sadi quantity  ">
                </div>
                <div class="mb-3">
                    <input type="input" name="sadi_color" class="form-control" id="exampleInputPassword1" placeholder="sadi colors">
                </div>
                <div class="mb-3">
                    <input type="input" name="sadi_fabric" class="form-control" id="exampleInputPassword1" placeholder="sadi fabric">
                </div>
                <div class="mb-3">
                    <input type="input" name="sadi_patter" class="form-control" id="exampleInputPassword1" placeholder="sadi patter">

                </div>
                <div class="mb-3">
                    <input type="input" name="sadi_specification" class="form-control" id="exampleInputPassword1" placeholder="sadi specification">

                    <input type="hidden" name="gender" value="female" class="form-control" id="exampleInputPassword1" placeholder="lehanga specification">

                </div>
                <div class="mb-3">
                    <input type="input" name="sadi_price" class="form-control" id="exampleInputPassword1" placeholder="sadi price">

                </div>
                <div class="mb-3">
                    <input type="input" name="sadi_manufacturing" class="form-control" id="exampleInputPassword1" placeholder="sadi manufacturing details">

                </div>

                <div class="mb-3">
                    <input type="input" name="orgnizing_contry" class="form-control" id="exampleInputPassword1" placeholder="contry organizing/contry name">

                </div>
                <div class="mb-3">
                    <input type="input" name="size" class="form-control" id="exampleInputPassword1" placeholder="size in metor">

                </div>
                <div class="mb-3">
                    
                    <textarea class="form-control" name="sadi_decription" id="exampleFormControlTextarea1" rows="3" placeholder="decription"></textarea>
                </div>
                <div class="mb-3">
                    <input type="file" name="sadi_photo" class="form-control" id="exampleInputPassword1" placeholder="photos">
                    <span class="text-danger bg-white text-center"><strong>upload only jpg,jpeg,png type photos</strong></span>

                </div>

                <button type="submit" name="submit" class="btn btn-primary ">Save</button>
            </form>
        </div>


    </div>

</body>

</html>