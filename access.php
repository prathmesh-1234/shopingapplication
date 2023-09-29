<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage/admin/user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- h1 font size  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>

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
        session_start();
        if(!isset($_SESSION["user"]))
        {
                echo '<div class="container d-flex justify-content-center mt-5 ">
                <div class="jumbotron jumbotron-fluid ">
                <div class="container">
                <h1 class="display-4">You are not login !</h1>
                <p class="lead">please login   Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            </div>';
            exit;
 
       }
    ?>

    <?php
     include "productdb.php";
    if(isset($_POST['pid']))
    {
        $pcid=$_GET['pcid'];
        // select image in product image database by using product_id
        $pid=$_POST['pid'];
        $sql="select * from product_image where product_id='$pid'";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_fetch_assoc($result);
        $product=$row['product_id'];

        if($pcid==3)
        {
            $sql1="select * from mobile where mobile_id='$product'";
            $result1=mysqli_query($connect,$sql1);
            $row1=mysqli_fetch_assoc($result1);
            echo '
            <div class="container">
                <div class="container d-flex mt-5 justify-content-center ">
                    <div class="card my-5  mx-5" style="max-width: 640px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="product_img/'. $row['image'] .'" class="img-fluid rounded-start" alt="product image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center">'.$row1['mobile_name'].'</h5>
                                    <option >RAM :'.$row1['mobile_ram'].'</option>
                                    <option >storage :'.$row1['mobile_storage'].'</option>
                                    <option >processor :'.$row1['mobile_processor'].'</option>
                                    <option >rear-camera :'.$row1['mobile_rear_camera'].'</option>
                                    <option >front-camera :'.$row1['moblie_frount_camera'].'</option>
                                    <option >price :'.$row1['mobile_price'].'</option>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="container w-25;">
                <h1 class="text-center">Choose your payment options</h1>
                <div class="container d-flex justify-content-center ">
                    <div class="btn-group flex-column" role="group" aria-label="Basic outlined example" >
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><h5>Debit/credit card</h5></button>

                        <button type="button" class="btn mt-2  btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModa" title="click to more Detaile"><h5>UPI</h5></button>

                        <button type="button" class="btn mt-2  btn-warning"><h5>Cash on dilevary</h5></button>
                    </div>
                </div>    
            </div>
                

            </div>
            
            ';
        }elseif($pcid==4)
        {
            $sql2="select * from laptop where laptop_id='$product'";
            $result2=mysqli_query($connect,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            echo '
            <div class="container">
                <div class="container d-flex my-5 justify-content-center ">
                    <div class="card my-5  mx-5" style="max-width: 640px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="product_img/'. $row['image'] .'"  class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center">'.$row2['laptop_name'].'</h5>
                                    <option >RAM :'.$row2['laptop_ram'].'</option>
                                    <option >storage :'.$row2['laptop_storage'].'</option>
                                    <option >processor :'.$row2['laptop_processor'].'</option>
                                    <option >camera :'.$row2['laptop_camera'].'</option>
                                    <option >price :'.$row2['laptop_price'].'</option>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

        }elseif($pcid==5)
        {
            $sql3="select * from shirtpant where shirtpant_id='$product'";
            $result3=mysqli_query($connect,$sql3);
            $row3=mysqli_fetch_assoc($result3);
            $specification=substr($row3['shirtpant_specification'],0,35);
            echo '
            <div class="container">
                <div class="container d-flex my-5 justify-content-center ">
                    <div class="card my-5  mx-5" style="max-width: 640px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="product_img/'. $row['image'] .'" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center">'.$row3['shirtpant_patter'].'</h5>
                                    <option >Brand : '.$row3['shirtpant_brand'].'</option>
                                    <option >color : '.$row3['shirtpant_color'].'</option>
                                    <option >fabric : '.$row3['shirtpant_fabric'].'</option>
                                    <option >price: '.$row3['shirtpant_price'].'</option>
                                    <option >specification : '.$specification.'</option>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            ';
           
        }elseif($pcid==6)
        {
            $sql3="select * from shirtpant where shirtpant_id='$product'";
            $result3=mysqli_query($connect,$sql3);
            $row3=mysqli_fetch_assoc($result3);
            $specification=substr($row3['shirtpant_specification'],0,35);
            echo '
            <div class="container">
                <div class="container d-flex my-5 justify-content-center ">
                    <div class="card my-5  mx-5" style="max-width: 640px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="product_img/'. $row['image'] .'" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center">'.$row3['shirtpant_patter'].'</h5>
                                    <option >Brand : '.$row3['shirtpant_brand'].'</option>
                                    <option >color : '.$row3['shirtpant_color'].'</option>
                                    <option >fabric : '.$row3['shirtpant_fabric'].'</option>
                                    <option >price: '.$row3['shirtpant_price'].'</option>
                                    <option >specification : '.$specification.'</option>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            ';
           
        }elseif($pcid==7)
        {
            $sql3="select * from shirtpant where shirtpant_id='$product'";
            $result3=mysqli_query($connect,$sql3);
            $row3=mysqli_fetch_assoc($result3);
            $specification=substr($row3['shirtpant_specification'],0,40);
            echo '
            <div class="container">
                <div class="container d-flex my-5 justify-content-center ">
                    <div class="card my-5  mx-5" style="max-width: 640px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="product_img/'. $row['image'] .'" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center">'.$row3['shirtpant_patter'].'</h5>
                                    <option >Brand : '.$row3['shirtpant_brand'].'</option>
                                    <option >color : '.$row3['shirtpant_color'].'</option>
                                    <option >fabric : '.$row3['shirtpant_fabric'].'</option>
                                    <option >price: '.$row3['shirtpant_price'].'</option>
                                    <option >specification : '.$specification.'</option>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            ';
        }
        
    }
     ?>


    <!-- <div class="container">
        <div class="container d-flex my-5 justify-content-center ">
            <div class="card my-5  mx-5" style="max-width: 640px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="product_img/" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="modalsection">

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container text-center">
                            <form action="#" method="post" class="ml-3">
                                <input type="number" name="card_number" placeholder="card number"
                                    class="col-8 size-"><br><br>
                                <input type="password" name="csv" placeholder="csv" class="col-8"><br><br>
                                <input type="number" name="expridate" placeholder="expardate" class="col-8"><br>
                                <input type="hidden" value="'.$row1['mobile_price'].'" name="price" class="col-3"><br>
                                <input type="submit" value="pay" class="text-center bg-warning border-0 col-2">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <div class="modal fade" id="exampleModa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container text-center">
                            <a href="#" class="nav-link"><h5>phonepe</h5></a>
                            <a href="#" class="nav-link"><h5>googalepe</h5></a>
                            <a href="#" class="nav-link"><h5>paytema</h5></a>
                            <a href="#" class="nav-link"><h5>amezonpay</h5></a>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
         


    </div>


</body>

</html>