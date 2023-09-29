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
        h1{
            font-family: 'Lobster', cursive;
            text-align: center;
             background:wheat;
        }
        .st:hover{
            font-size:large;

        }
    </style>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->





    <!-- heading  -->
    <h1 id="h1">WELCOME to Food scaling section</h1>



    <!-- food section value stored in database using php  -->
   
    <?php
    include 'foodsubmit.php';
    if(isset($_GET['show']))
    {
        $show=$_GET['show'];
        if($show==true)
        {
            echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>submite successfully  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
            
        }
    }

    ?>

    <!-- food scaling form  -->
    <div class="container mt-4 ">
        <div class="container  " style="width: 500px;">

            <form action="foodsubmit.php" method="post">
                <div class="mb-3">
                    <input type="input" name="food_name" class="form-control" id="exampleInputEmail1" placeholder="food name">
                </div>
                <div class="mb-3">

                    <input type="input" name="food_quantity" class="form-control" id="exampleInputPassword1" placeholder="food quantity kg/gram/dasion ">
                </div>
                <div class="mb-3">
                    <input type="input" name="food_qualitiy" class="form-control" id="exampleInputPassword1" placeholder="food qualitiy">
                </div>
                <div class="mb-3">
                    <input type="input" name="food_specification" class="form-control" id="exampleInputPassword1" placeholder="food specification">
                </div>
                <div class="mb-3">
                    <input type="input" name="food_price" class="form-control" id="exampleInputPassword1" placeholder="food price">

                </div>
                <div class="mb-3">
                    <input type="input" name="food_orgnizing" class="form-control" id="exampleInputPassword1" placeholder="contry organizing/contry name">

                </div>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="food_id" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1"><strong class="st">Frout</strong></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="food_id" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2"><strong class="st">Vegitable</strong></label>
                    </div>
                    
                </div>

                <div class="mb-3">
                    <textarea name="food_decription" id="exampleInputPassword1" class="form-control" placeholder="decription" id="" cols="30" rows="10"></textarea>
                    <!-- <input type="text" class="form-control" name="food_decription" id="" placeholder="decription "> -->

                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>
    
</body>

</html>