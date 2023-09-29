<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage/admin/user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        
    /* moni saving section  */
    #ms {
        width: 11.5rem;
    }

    /* .slider{
    background-color: black;
    color: black;
   } */
    #msimg:hover {
        box-shadow: -6px 3px 10px;
        /* opacity: 0.3; */
        transition: 0.8s;
    }

    .mssection {
        box-shadow: 3px 3px 10px;
    }

    /* #recented {
       
        
    } */
    /* recent section  */
    #kp {
        width: 18rem;
    }

    #recent {
        width: 280px;
        height: 240px;
        box-shadow: 4px 3px 6px;
    }

    #recent:hover {
        width: 285px;
        height: 250px;
        opacity: 0.5;
        transition: 0.8s;

    }

    /* extra */
    .extra {

        margin: 20px;
        width: 23rem;
        height: 28rem;
        box-shadow: 4px 3px 6px;


    }

    .extraimg {
        height: 22rem;
    }

    .extratext {
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    /* trinding section  */

    #traindings {
        width: 11rem;

    }

    #trainding_img {
        width: 110px;
    }

    #trainding_img:hover {
        /* width: 102px; */
        /* height: 110px; */
        box-shadow: 3px 3px 6px;
    }

    /* slider in image  */
    #slider {
        height: 320px;
    }

    .shadow {
        box-shadow: 4px 4px 6px black;
    }

    body {
        overflow-x: hidden;

    }


    @media (min-width:350px) and (max-width:420px) {

        /* recent scetion  */
        #kp {
            width: 3rem;

        }

        #recent {
            width: 80px;
            height: 85px;
        }

        /* trainding section  */
        #traindings {
            width: 3rem;

        }

        #trainding_text {
            font-size: 0.2rem;
        }

        #trainding_img {
            width: 40px;
        }

        /* slider section  */
        #slider {
            height: 145px;
        }

        #forms {
            width: 5.4rem;
            /* display: none; */
            /* visibility: hidden; */
        }

        #mybtn {
            font-size: 0.5rem;
            width: 3rem;
        }

        /* nav bar  */

        #navdropdown {

            font-size: 0.8rem;
        }

        #mynavbar {
            justify-content: space-evenly;
        }
        /* many saving  */
     
.mn{
        display: none;
       
    }
    .msclass{
        display: none;
    }
    #ms{
        display: none;
    }



        .extratext {
            font-size: small;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }


    }
    </style>


</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
   
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->
<?php
 
  // create a new session of admin and user 
  if (isset($_GET['use'])) {
    // create custome session id 
    // session_id("mysession");
    // session_start();
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      // resuest is get then  
      // get hidden input in navegation.php user or admin
      $select = $_GET['selection'];
      // cookie is set of admin or user dynamicaly
      $_COOKIE["select"] = $select;
      // session set dynamicaly if user or admin 
      $_SESSION["select"] = $select;
    }
  }
 
  require 'navegation.php';
  require 'productdb.php';
  // echo $_SESSION["select"];
  if (isset($_GET['notfound'])) {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>your account is not exsite  </strong> your singin to create account  .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
    ';
  }
  if (isset($_GET['alert'])) {
    session_unset();
    session_reset();
    session_destroy();
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>please login </strong>you are not login  .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  ';
  }
  ?>
    <div class="border border-dark bg-dark col-lg-12 ">
        <!-- slider  -->
        <div
            class="container d-flex flex-wrap flex-row justify-content-center align-items-center justify-content-sm-cente slider">
            <div class="container ">
                <div class="container  ">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide shadow" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="shoping/shoping2.jpg" class="d-block w-100" id="slider" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="shoping/shoping3.jpg" class="d-block w-100" id="slider" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="shoping/shoping1.jpg" class="d-block w-100" id="slider" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <span>Third slide label</span>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- trainding  -->

            <div
                class="d-flex flex-wrap flex-row justify-content-center align-items-center justify-content-sm-center  mt-2 bg-dark ">

                <div class="card border-dark   bg-dark justify-content-center align-items-center justify-content-sm-center "
                    id="traindings">
                    <a href="trainding.php?id=3"> <img src="aboutimg/mobilphone.jpg" alt="..." id="trainding_img"
                            class="rounded-circle img-fluid"></a>
                    <div class="card-body">
                        <p class="card-text" id="trainding_text"><strong class="text-white">mobiles</strong></p>
                    </div>
                </div>

                <div class="card border-dark  bg-dark  justify-content-center align-items-center justify-content-sm-center"
                    id="traindings">
                    <a href="trainding.php?id=4"> <img src="aboutimg/laptop.jpg" alt="..." id="trainding_img"
                            class="rounded-circle img-fluid"></a>
                    <div class="card-body">
                        <p class="card-text" id="trainding_text"><strong class="text-white">Laptops</strong></p>
                    </div>
                </div>

                <div class="card border-dark   bg-dark  justify-content-center align-items-center justify-content-sm-center "
                    id="traindings">
                    <a href="trainding.php?id=7"> <img src="aboutimg/sadi.jpg" alt="..." id="trainding_img"
                            class="rounded-circle img-fluid"></a>
                    <div class="card-body">
                        <p class="card-text" id="trainding_text"><strong class="text-white">sadi 30% off </strong></p>

                    </div>
                </div>

                <div class="card border-dark   bg-dark  justify-content-center align-items-center justify-content-sm-center"
                    id="traindings">
                    <a href="trainding.php?id=5"> <img src="aboutimg/shirts.jpg" alt="..." id="trainding_img"
                            class="rounded-circle img-fluid "></a>
                    <div class="card-body">
                        <p class="card-text" id="trainding_text"><strong class="text-white">Shirts 45% off</strong></p>
                    </div>
                </div>
                <div class="card border-dark  bg-dark  justify-content-center align-items-center justify-content-sm-center"
                    id="traindings">
                    <a href="trainding.php?id=1"> <img src="aboutimg/frout.jpg" alt="..." id="trainding_img"
                            class="rounded-circle img-fluid"></a>
                    <div class="card-body">
                        <p class="card-text" id="trainding_text"><strong class="text-white">Fresh food</strong></p>
                    </div>
                </div>
                <div class="card border-dark   bg-dark  justify-content-center align-items-center justify-content-sm-center"
                    id="traindings">
                    <a href="trainding.php?id=6"> <img src="aboutimg/pants.jpg" alt="..." id="trainding_img"
                            class="rounded-circle img-fluid"></a>
                    <div class="card-body">
                        <p class="card-text" id="trainding_text"><strong class="text-white">pants</strong></p>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <!-- recents  -->
    <div class="container mt-3   ">

        <div class="container d-flex flex-wrap justify-content-center  justify-content-sm-center justify-content-md-center   mx-auto"
            id="mycotainer">
            <?php
      $sql = "select * from product_image";
      $result = mysqli_query($connect, $sql);
      $r = 0;
      while ($r < 3) {
        $row = mysqli_fetch_assoc($result);
        $pid = $row['product_id'];
        
        echo '
        <a href="bay.php?bayp='.$pid.'">';
      ?>
            <!-- d-inline-block -->
            <div class="card justify-content-center  justify-content-sm-center justify-content-md-center  border-white mx-4 "
                id="kp">
                <img class="card-img-top  " src="product_img/<?php echo $row['image']; ?>" id="recent"
                    alt="Card image cap">
                <div class="card-body">
                    <h4></h4>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
            </div>
            <?php
        echo '
      </a>';
        $r++;
      }

      ?>
            <!-- </div> -->

        </div>

    </div>


    <!-- mony saving section  -->


    <div class="d-flex mn   mt-1 pt-4">

        <!-- mobile  -->
        <div class="container d-flex flex-wrap flex-md-wrap  justify-content-center  justify-content-sm-center justify-content-md-center msclass ">
            <?php
      $sql = "select * from product_image where product_id='krcti'";
      $result = mysqli_query($connect, $sql);
      $r = 0;
     //   while ($r < 5) {
        $row = mysqli_fetch_assoc($result);
        $pid = $row['product_id'];
        $sql2="select * from mobile where mobile_id='$pid'";
        $result2=mysqli_query($connect,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        $pid1=$row2['product_id'];
        $extraprice=$row2['mobile_price']*1.5;
        // if()
        echo '
        <a href="trainding.php?id='.$pid1.'" class="nav-link flex-md-wrap ">';
      ?>
            <!-- d-inline-block -->
            <div class="card justify-content-center  justify-content-sm-center flex-md-wrap justify-content-md-center border-white mx-4 "
                id="ms">
                <img class="card-img-top" src="product_img/<?php echo $row['image']; ?>" id="msimg" alt="Card image cap"
                    style="width: 100%; height:100%">
                <div class="card-body">
                    <h4 class="card-text extratext"><strike class="text-success"><?php echo $extraprice ?></strike> <?php echo " ".$row2['mobile_price']  ?></h4>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
            </div>
            <?php
        echo '
      </a>';
        $r++;
     //   }

      ?>
            <!-- </div> -->

        </div>


        <!-- shirt  -->
        <div class="container d-flex flex-wrap justify-content-center  justify-content-sm-center justify-content-md-center  msclass "
            >
            <?php
      $sql = "select * from product_image where product_id='oddi1'";
      $result = mysqli_query($connect, $sql);
     //   while ($r < 5) {
        $row = mysqli_fetch_assoc($result);
        $pid = $row['product_id'];
        $sql2="select * from shirtpant where shirtpant_id='$pid'";
        $result2=mysqli_query($connect,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        $pid1=$row2['product_id'];
        $extraprice=$row2['shirtpant_price']*1.5;
        // if()
        echo '
        <a href="trainding.php?id='.$pid1.'" class="nav-link flex-md-wrap">';
      ?>
            <!-- d-inline-block -->
            <div class="card justify-content-center  justify-content-sm-center flex-md-wrap justify-content-md-center border-white mx-4  "
                id="ms">
                <img class="card-img-top  " src="product_img/<?php echo $row['image']; ?>" id="msimg"
                    style="width: 100%; height:100%" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text extratext"><strike class="text-success"><?php echo $extraprice ?></strike><?php echo " ". $row2['shirtpant_price'] ?></h4>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
            </div>
            <?php
        echo '
      </a>';
      
     //   }

      ?>
            <!-- </div> -->

        </div>

        <!-- laptop  -->
        <div class="container d-flex flex-wrap justify-content-center  justify-content-sm-center justify-content-md-center msclass "
            >
            <?php
            
      $sql = "select * from product_image where product_id='assoi'";
      $result = mysqli_query($connect, $sql);
      
     //   while ($r < 5) {
        $row = mysqli_fetch_assoc($result);
        $pid = $row['product_id'];
        $sql2="select * from laptop where laptop_id='$pid'";
        $result2=mysqli_query($connect,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        // commnat is of product 
        $pid1=$row2['product_id'];
        $extraprice=$row2['laptop_price']*1.5;
        // if()
        echo '
        <a href="trainding.php?id='.$pid1.'" class="nav-link flex-md-wrap">';
      ?>
            <!-- d-inline-block -->
            <div class="card justify-content-center  justify-content-sm-center flex-md-wrap justify-content-md-center   border-white mx-4 "
                id="ms">
                <img class="card-img-top  " id="msimg" src="product_img/<?php echo $row['image']; ?>"
                    style="width: 100%; height:100%" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text extratext"><strike class="text-success"><?php echo $extraprice ;?></strike><?php echo " ". $row2['laptop_price']; ?></h4>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
            </div>
            <?php
        echo '
      </a>';
      
     //   }

      ?>
            <!-- </div> -->

        </div>



        <!-- sadi  -->

        <div class="container d-flex flex-wrap justify-content-center  justify-content-sm-center justify-content-md-center flex-md-wrap msclass "
            >
            <?php
            
      $sql = "select * from product_image where product_id='ks1'";
      $result = mysqli_query($connect, $sql);
      
     //   while ($r < 5) {
        $row = mysqli_fetch_assoc($result);
        $pid = $row['product_id'];
        $sql2="select * from shirtpant where shirtpant_id='$pid'";
        $result2=mysqli_query($connect,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        $pid1=$row2['product_id'];
        $extraprice=$row2['shirtpant_price']*1.5;
        // if()
        echo '
        <a href="trainding.php?id='.$pid1.'" class="nav-link flex-md-wrap">';
      ?>
            <!-- d-inline-block -->
            <div class="card justify-content-center  justify-content-sm-center flex-md-wrap justify-content-md-center  border-white mx-4 "
                id="ms">
                <img class="card-img-top  " id="msimg" src="product_img/<?php echo $row['image']; ?>"
                    style="width: 100%; height:100%" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text extratext"><strike class="text-success"><?php echo $extraprice ?></strike><?php echo " ". $row2['shirtpant_price'] ; ?></h4>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
            </div>
            <?php
        echo '
      </a>';
      
     //   }

      ?>
            <!-- </div> -->

        </div>

        <!-- pant  -->
        <div class="container d-flex flex-wrap justify-content-center  justify-content-sm-center justify-content-md-center msclass  "
              >
            <?php
            
      $sql = "select * from product_image where product_id='gjj'";
      $result = mysqli_query($connect, $sql);
      
     //   while ($r < 5) {
        $row = mysqli_fetch_assoc($result);
        $pid = $row['product_id'];
        $sql2="select * from shirtpant where shirtpant_id='$pid'";
        $result2=mysqli_query($connect,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        $pid1=$row2['product_id'];
        $extraprice=$row2['shirtpant_price']*1.3;
        // if()
        echo '
        <a href="trainding.php?id='.$pid1.'" class="nav-link flex-md-wrap">';
      ?>
            <!-- d-inline-block -->
            <div class="card justify-content-center  justify-content-sm-center flex-md-wrap justify-content-md-center   border-white mx-4 "
                id="ms">
                <img class="card-img-top  " src="product_img/<?php echo $row['image']; ?>" id="msimg"
                    style="width: 100%; height:100%" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text extratext"><strike class="text-success"><?php echo $extraprice ?></strike><?php echo " ". $row2['shirtpant_price']; ?></h4>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
            </div>
            <?php
        echo '
      </a>';
      
     //   }

      ?>
            <!-- </div> -->

        </div>

    </div>









    <!-- extra section  -->
    <div class="container">

        <div
            class=" d-flex mt-4 justify-content-center  justify-content-sm-center justify-content-md-center flex-wrap ">
            <!-- card 1 -->
            <?php
    $sql="select * from product_image where product_id='oddi1'";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    $product_id=$row['product_id'];
    $sql2="select * from shirtpant where shirtpant_id='$product_id' ";
    $result2=mysqli_query($connect,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    $extraprice=$row2['shirtpant_price']*1.5;
    $pcid=$row2['product_id'];
   
    ?>
            <a href="trainding.php?id=<?php echo $pcid ?>" class="nav-link">
                <div class="card ml-3 extra">
                    <img src="product_img/<?php echo $row['image']  ?>" class="card-img-top  extraimg" alt="...">
                    <div class="card-body">
                        <h2 class="card-text extratext"><?php echo $row2['shirtpant_patter'];  ?></h2>
                        <h4 class="extratext text-success"><strike><?php echo $extraprice ?></strike>
                            <?php echo "  ". $row2['shirtpant_price'] ?></h4>
                        <p class="card-text"> </p>
                    </div>
                </div>
            </a>

            <!-- card 2 -->
            <?php
    $sql="select * from product_image where product_id='macai0'";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    $product_id=$row['product_id'];
    $sql2="select * from laptop where laptop_id='$product_id' ";
    $result2=mysqli_query($connect,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    $extraprice=$row2['laptop_price']*1.5;
    $pcid=$row2['product_id'];
   
    ?>
            <a href="trainding.php?id=<?php echo $pcid ?>" class="nav-link">
                <div class="card mr-2 extra">
                    <img src="product_img/<?php echo $row['image'] ?>" class="card-img-top  extraimg" alt="...">
                    <div class="card-body">
                        <h2 class="card-text extratext"><?php echo $row2['laptop_company'];  ?></h2>
                        <h4 class="extratext text-success"><strike><?php echo $extraprice ?></strike>
                            <?php echo "  ". $row2['laptop_price'] ?></h4>
                        <p class="card-text"> </p>
                    </div>
                </div>
            </a>


            <!-- card 3 -->
            <?php
    $sql="select * from product_image where product_id='gjj'";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    $product_id=$row['product_id'];
    $sql2="select * from shirtpant where shirtpant_id='$product_id' ";
    $result2=mysqli_query($connect,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    $extraprice=$row2['shirtpant_price']*1.5;
    $pcid=$row2['product_id'];
   
    ?>
            <a href="trainding.php?id=<?php echo $pcid ?>" class="nav-link">
                <div class="card mr-2 extra">
                    <img src="product_img/<?php echo $row['image'] ?>" class="card-img-top mt-3 extraimg" alt="...">
                    <div class="card-body">
                        <h2 class="card-text extratext"><?php echo $row2['shirtpant_patter'];  ?></h2>
                        <h4 class="extratext text-success"><strike><?php echo $extraprice ?></strike>
                            <?php echo "  ". $row2['shirtpant_price'] ?></h4>
                        <p class="card-text"> </p>
                    </div>
                </div>
            </a>
            <!-- card 4 -->
            <?php
    $sql1="select * from product_image where product_id='krcti'";
    $result1=mysqli_query($connect,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $product_id=$row1['product_id'];
    $sql3="select * from mobile where mobile_id='$product_id' ";
    $result3=mysqli_query($connect,$sql3);
    $row3=mysqli_fetch_assoc($result3);
    $extraprice=$row3['mobile_price']*1.5;
    $pcid=$row3['product_id'];
   
    ?>
            <a href="trainding.php?id=<?php echo $pcid ?>" class="nav-link">
                <div class="card mr-2 extra ">
                    <img src="product_img/<?php echo $row1['image'] ?>" class="card-img-top extraimg" alt="...">
                    <div class="card-body">
                        <h2 class="card-text extratext"><?php echo $row3['mobile_company'];  ?></h2>
                        <h4 class="extratext text-success"><strike><?php echo $extraprice ?></strike>
                            <?php echo "  ". $row3['mobile_price'] ?></h4>
                        <p class="card-text"> </p>
                    </div>
                </div>

            </a>
        </div>

    </div>




</body>

</html>