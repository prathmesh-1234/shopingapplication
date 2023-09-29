<?php
include "navegation.php";
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
     .trainding_cards{
      
      box-shadow: 3px 3px 10px;
      
     }
     .trainding_cards:hover{
      box-shadow: 5px 5px 10px;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <div class="container d-flex">
    <?php
include 'productdb.php';

if(isset($_GET['id']))
{
  $id=$_GET['id'];

}
// mobile 
if($id==3)
{
  $sql="select * from mobile where product_id='$id'";
  $result=mysqli_query($connect,$sql);
  
  while($row=mysqli_fetch_assoc($result) ){
  $pid=$row['mobile_id'];
  $sql2="select * from product_image where product_id='$pid'";
  $result2=mysqli_query($connect,$sql2);
  $imgs=mysqli_fetch_assoc($result2);
    echo '
    <a href="bay.php?bayp='.$pid.'& pcid='.$id.'" class="nav-link" >
    <div class="card  justify-content-center align-items-center justify-content-sm-center  mx-2 trainding_cards mx-2" style="width: 16rem;">
    ';?>
  <img class="card-img-top" src="product_img/<?php echo $imgs['image'] ;?>" height="250px" alt="Card image cap">
 <?php echo'
  <div class="card-body">
    <h5 class="card-title">'.$row['mobile_name'].'</h5>
    <p class="card-text"><strong class="text-success">10% off ₹'.$row['mobile_price'].'</strong></p>
   
   </div>
    </div>
    </a>
    ';

}
// laptop 
}elseif($id==4)
{
  $sql="select * from laptop where product_id='$id'";
  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_assoc($result) ){
  $pid=$row['laptop_id'];
  $sql2="select * from product_image where product_id='$pid'";
  $result2=mysqli_query($connect,$sql2);
  $imgs=mysqli_fetch_assoc($result2);
    echo '
    <a href="bay.php?bayp='.$pid.'& pcid='.$id.'" class="nav-link" >
    <div class="card  justify-content-center align-items-center justify-content-sm-center  mx-2 trainding_cards mx-2" style="width: 16rem;">
    ';?>
  <img class="card-img-top" src="product_img/<?php echo $imgs['image'] ;?>" height="250px" alt="Card image cap">
 <?php echo'
  <div class="card-body">
    <h5 class="card-title">'.$row['laptop_name'].'</h5>
    <p class="card-text"><strong class="text-success">15% off ₹'.$row['laptop_price'].'</strong></p>
   
   </div>
    </div>
    </a>
    ';

}

// sadi 
}elseif($id==7)
{
  $sql="select * from shirtpant where product_id='$id'";
  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_assoc($result) ){
  $pid=$row['shirtpant_id'];
  $sql2="select * from product_image where product_id='$pid'";
  $result2=mysqli_query($connect,$sql2);
  $imgs=mysqli_fetch_assoc($result2);
    echo '
    <a href="bay.php?bayp='.$pid.'& pcid='.$id.'" class="nav-link ">
    <div class="card   justify-content-center align-items-center justify-content-sm-center  mx-2 trainding_cards " style="width: 16rem;" >
    ';?>
  <img class="card-img-top " src="product_img/<?php echo $imgs['image'] ;?>" height="250px" alt="Card image cap">
 <?php echo'
  <div class="card-body">
    <h5 class="card-title">'.$row['shirtpant_patter'].'</h5>
    <p class="card-text"><strong class="text-success">15% off ₹'.$row['shirtpant_price'].'</strong></p>
   
   </div>
    </div>
    </a>
    ';

}

// shirt 
}elseif($id==5)
{
  $sql="select * from shirtpant where product_id='$id'";
  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_assoc($result) ){
  $pid=$row['shirtpant_id'];
  $sql2="select * from product_image where product_id='$pid'";
  $result2=mysqli_query($connect,$sql2);
  $imgs=mysqli_fetch_assoc($result2);
    echo '
    <a href="bay.php?bayp='.$pid.'& pcid='.$id.'" class="nav-link" >
    <div class="card  justify-content-center align-items-center justify-content-sm-center  mx-2 trainding_cards mx-2" style="width: 16rem;">
    ';?>
  <img class="card-img-top" src="product_img/<?php echo $imgs['image'] ;?>" height="250px" alt="Card image cap">
 <?php echo'
  <div class="card-body">
    <h5 class="card-title">'.$row['shirtpant_patter'].'</h5>
    <p class="card-text"><strong class="text-success">15% off ₹'.$row['shirtpant_price'].'</strong></p>
   
   </div>
    </div>
    </a>
    ';

}

// pant 
}elseif($id==6)
{
  $sql="select * from shirtpant where product_id='$id'";
  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_assoc($result) ){
  $pid=$row['shirtpant_id'];
  $sql2="select * from product_image where product_id='$pid'";
  $result2=mysqli_query($connect,$sql2);
  $imgs=mysqli_fetch_assoc($result2);
    echo '
    <a href="bay.php?bayp='.$pid.'& pcid='.$id.'" class="nav-link">
    <div class="card  justify-content-center align-items-center justify-content-sm-center  mx-2 trainding_cards mx-2" style="width: 16rem;">
    ';?>
  <img class="card-img-top" src="product_img/<?php echo $imgs['image'] ;?>" height="250px" alt="Card image cap">
 <?php echo'
  <div class="card-body">
    <h5 class="card-title">'.$row['shirtpant_patter'].'</h5>
    <p class="card-text"><strong class="text-success">15% off ₹'.$row['shirtpant_price'].'</strong></p>
   
   </div>
    </div>
    </a>
    ';

}
// food 
}elseif($id==1)
{
  $sql="select * from food where food_id='$id'";
  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_assoc($result) ){
  $pid=$row['food_id'];
  $sql2="select * from product_image where product_id='$pid'";
  $result2=mysqli_query($connect,$sql2);
  $imgs=mysqli_fetch_assoc($result2);
    echo '
    <a href="bay.php?bayp='.$pid.'& pcid='.$id.'" class="nav-link">
    <div class="card  justify-content-center align-items-center justify-content-sm-center  mx-2 trainding_cards  mx-2" style="width: 16rem;">
    ';?>
  <img class="card-img-top" src="product_img/<?php echo $imgs['image'] ;?>" height="250px" alt="Card image cap">
 <?php echo'
  <div class="card-body">
    <h5 class="card-title">'.$row['food_name'].'</h5>
    <p class="card-text"><strong class="text-success"> ₹'.$row['food_price'].'</strong></p>
   
   </div>
    </div>
    </a>
    ';

}
}elseif($id==1)
{
  $sql="select * from food where food_id='$id'";
  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_assoc($result) ){
  $pid=$row['food_id'];
  $sql2="select * from product_image where product_id='$pid'";
  $result2=mysqli_query($connect,$sql2);
  $imgs=mysqli_fetch_assoc($result2);
    echo '
    <a href="bay.php?bayp='.$pid.'& pcid='.$id.'" class="nav-link" >
    <div class="card  justify-content-center align-items-center justify-content-sm-center  mx-2 trainding_cards mx-2" style="width: 16rem;">
    ';?>
  <img class="card-img-top" src="product_img/<?php echo $imgs['image'] ;?>" height="250px" alt="Card image cap">
 <?php echo'
  <div class="card-body">
    <h5 class="card-title">'.$row['food_name'].'</h5>
    <p class="card-text"><strong class="text-success"> ₹'.$row['food_price'].'</strong></p>
   </div>
    </div>
    </a>
    ';

}


}


?> 
</div></body>


</html>