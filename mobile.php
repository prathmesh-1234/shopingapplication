<?php
session_start();
if(!isset($_SESSION["admin"]))
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
    <h1 id="h1">WELCOME to mobile scaling section</h1>



    <!-- food section value stored in database using php in mobile table   -->

    <?php
    include 'mobilesubmit.php';
   
    ?>







    <!-- food scaling form  -->
    <div class="container mt-4 ">
        <div class="container  " style="width: 500px;">

            <form action="mobile.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="hidden" name="product_id" value="3">
                    <input type="input" name="mobile_name" class="form-control" id="exampleInputEmail1" placeholder="mobile name">
                </div>
                <div class="mb-3">

                    <input type="input" name="mobile_ram" class="form-control" id="exampleInputPassword1" placeholder="mobile ram & it type">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_storage" class="form-control" id="exampleInputPassword1" placeholder="mobile storage">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_processor" class="form-control" id="exampleInputPassword1" placeholder="mobile processor">
                </div>
                <div class="mb-3">
                    <input type="input" name="moblie_frount_camera" class="form-control" id="exampleInputPassword1" placeholder="mobile frount camera/specification">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_rear_camera" class="form-control" id="exampleInputPassword1" placeholder="mobile rear/specifiation">
                </div>
    
                <div class="mb-3">
                    <input type="input" name="mobile_company" class="form-control" id="exampleInputPassword1" placeholder="mobile company">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_charger" class="form-control" id="exampleInputPassword1" placeholder="mobile charger">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_battry" class="form-control" id="exampleInputPassword1" placeholder="mobile battry information">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_display_specification" class="form-control" id="exampleInputPassword1" placeholder="mobile display specification">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_specification" class="form-control" id="exampleInputPassword1" placeholder="mobile specification">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_price" class="form-control" id="exampleInputPassword1" placeholder="mobile price">

                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_orgnizing" class="form-control" id="exampleInputPassword1" placeholder="contry organizing/contry name">

                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_manifacturing" class="form-control" id="exampleInputPassword1" placeholder="mobile manifacturing ">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_worrenty" class="form-control" id="exampleInputPassword1" placeholder="mobile worrenty /garenty ">
                </div>
                <div class="mb-3">
                    <input type="input" name="mobile_id" class="form-control" id="exampleInputPassword1" placeholder="mobile id">
                </div>

                <div class="mb-3">

                    <!-- checkbox -->
                    <input type="input" name="mobile_network" class="form-control" id="exampleInputPassword1" placeholder="mobile network">
                </div>
                <!-- </div> -->

                <div class="mb-3">
                    <textarea name="mobile_decription" id="exampleInputPassword1" class="form-control" placeholder="mobile decription" id="" cols="30" rows="10"></textarea>
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









