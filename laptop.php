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
        body{
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->





    <!-- heading  -->
    <h1 id="h1">WELCOME to Laptop scaling section</h1>



    <!-- food section value stored in database using php  -->
   <?php
   include 'laptopsubmit.php';
   ?>

    <!-- food scaling form  -->
    <div class="container mt-4 ">
        <div class="container  " style="width: 500px;">

            <form action="laptop.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="hidden" name="product_id" class="form-control" id="exampleInputEmail1" value="4">
                    <input type="input" name="laptop_name" class="form-control" id="exampleInputEmail1" placeholder="Laptop name">
                </div>
                <div class="mb-3">

                    <input type="input" name="laptop_ram" class="form-control" id="exampleInputPassword1" placeholder="Laptop RAM ">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_storage" class="form-control" id="exampleInputPassword1" placeholder="Laptop storage">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_camera" class="form-control" id="exampleInputPassword1" placeholder="Laptop camera inforamtion ">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_processor" class="form-control" id="exampleInputPassword1" placeholder="Laptop processor information ">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_company" class="form-control" id="exampleInputPassword1" placeholder="Laptop company">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_battery_inforamtion" class="form-control" id="exampleInputPassword1" placeholder="Laptop battery inforamtion">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_charger" class="form-control" id="exampleInputPassword1" placeholder="Laptop charger">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_display" class="form-control" id="exampleInputPassword1" placeholder="Laptop display specificaiton ">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_network" class="form-control" id="exampleInputPassword1" placeholder="Laptop network connectivity ">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_specification" class="form-control" id="exampleInputPassword1" placeholder="Laptop specification">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_warrenty" class="form-control" id="exampleInputPassword1" placeholder="Laptop warrenty">
                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_price" class="form-control" id="exampleInputPassword1" placeholder="Laptop price">

                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_manifacturing" class="form-control" id="exampleInputPassword1" placeholder="laptop manifacturing ">

                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_id" class="form-control" id="exampleInputPassword1" placeholder="laptop id">

                </div>
                <div class="mb-3">
                    <input type="input" name="laptop_orgnizing" class="form-control" id="exampleInputPassword1" placeholder="contry organizing/contry name">

                </div>
            

                <div class="mb-3">
                    <textarea name="laptop_decription" id="exampleInputPassword1" class="form-control" placeholder="decription" id="" cols="30" rows="10"></textarea>
                    <!-- <input type="text" class="form-control" name="food_decription" id="" placeholder="decription "> -->
                </div>
                <div class="mb-3">
                    <label >product photo </label><br>
                    <input type="file" name="file_name" oninvalid="pk()" class="form-control" id="exampleInputPassword1" placeholder="Image enter ">
                    <span class="text-danger ">please enter jpg,jpeg,png and uploade upto 50kb size photo </span>
                </div>
            
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>

</body>

</html>