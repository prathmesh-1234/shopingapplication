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
    <style>
    #pricebutton {
        width: 10rem;
    }

    #product_img {
        width: 23rem;
    }

    #size_container {
        width: 18rem;
    }

    #sizebutton {
        width: 40px;
        background-color: palegoldenrod;
    }

    #myfont {
        padding-left: 30px;
    }

    #selected {
        /* background-color: green; */
        overflow-y: scroll;

    }

    #shadow {
        /* border: 2px solid; */
        text-shadow: 20px 4px 5px;
    }

    #mybtn {
        border: none;
        text-align: start;
    }

    #maindiv {
        border: none;
        /* box-shadow: 3px 3px 5px ; */
    }

    /* #boxes{
      height: 300px;
      display:inline-block;
      background-color: black;
    } */
    /* media queary  */
    @media (min-width:350px) and (max-width:420px) {

        /* display: flex;  */
        #mycard {
            /* display: flex; */
            flex-direction: column;
        }

        #product_img {
            margin-left: auto;
            margin-right: auto;
            width: 12rem;
            height: 12rem;
        }

        #pricebutton {
            font-size: 0.8rem;
            margin-left: 0%;
            padding-left: 0%;
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
    <div class="mt-5 shadow ">

        <?php
    require 'productdb.php';
    if (isset($_GET['bayp'])) {
      $byp = $_GET['bayp'];
    }
    if (isset($_GET['pcid'])) {
      $pcid = $_GET['pcid'];
    }
    // access product image form product_image database  
    $sql = "select * from product_image where product_id='$byp'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    // set both gets datas 
    if(isset($_GET['pcid']) && isset($_GET['bayp'])){
    if ($row > 0) {

    //  if($pcid==1)
    //  {
    //   $sql4="select * from food where "

    //  }

 
    // mobile data show 
    if($pcid==3)
    {
      $sql5="select * from mobile where mobile_id='$byp'";
      $result=mysqli_query($connect,$sql5);
      $row5=mysqli_fetch_assoc($result);
      $offprice=$row5['mobile_price']*2;
      echo '
      <div class="card d-flex flex-row border-0 " >
      <div class="card border-0">
      ';
        ?>
        <img class="card-img-top img-fluid" src="product_img/<?php echo $row['image']; ?>" style="width:24rem;"
            alt="Card image cap">
        <?php
      echo'
      </div>
      <div class="card-body mx-5 " id="mycard">
      <div class="container text-center">
      <h2 class="card-text t d-inline-block"><b>'.$row5['mobile_name'].'</b> </h2> <strong > <i> </i></strong>
        </div>
       
        <button class="btn bg-light " id="pricebutton"><strong class="text-success">10% Off <strike>'.$offprice.'</strike></strong><b text-dark> ₹'.$row5['mobile_price'].'</b></button>
        <p class="card-text">'.$row5['mobile_specification'].'</p>
        
        <div class="selected shadow my-5">
      
         <option>Product Ditaile</option>
          <option value="1">name :'.' '. $row5['mobile_name'].'</option>
          <option value="1">Brand :'.' '. $row5['mobile_company'].'</option>
          <option value="2">RAM :'.' '.$row5['mobile_ram'].'</option>
          <option value="3">Display :'.' '.$row5['mobile_display_specification'].'</option>
         
          <hr>
      
          <option class="  mybtm col-12 my-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><strong>More Product Detaile</strong></option>
          
         
        </div>
        '.$row5['mobile_decription'].'
      

        <form action="access.php?pcid='.$pcid.'" method="post" class=" mt-2 bg-warning btn border-0 d-block shadow  btn-lg active mb-0" role="button" >
        <input type="hidden" value="'.$row5["mobile_id"].'" name="pid">
        <input type="submit" value="Bay" class="border-0 bg-warning" >
      </form>
        
        
      </div>
     
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detailes </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <option value="2">Name :'.' '.$row5['mobile_name'].'</option>
        <option value="2">Company :'.' '.$row5['mobile_company'].'</option>
        <option value="4">RAM :'.' '.$row5['mobile_ram'].'</option>
        <option value="5">Storage : '.' '.$row5['mobile_storage'].'</option>
        <option value="7">Network support : '.' '.$row5['mobile_network'].'</option>
        <option value="6">Processor : '.' '.$row5['mobile_processor'].'</option>
        <option value="7">selfe : '.' '.$row5['moblie_frount_camera'].'</option>
        <option value="7">rear camera  : '.' '.$row5['mobile_rear_camera'].'</option>
        <option value="7">Battray : '.' '.$row5['mobile_battry'].'</option>
        <option value="7">charger : '.' '.$row5['mobile_charger'].'</option>
        <option value="7">worrenty : '.' '.$row5['mobile_worrenty'].'</option>
        <option value="7">organizing : '.' '.$row5['mobile_orgnizing'].'</option>
        <option value="7">Manufacturing : '.' '.$row5['mobile_manifacturing'].'</option>
      </div>
     
    </div>
  </div>
</div>
    ';
  // laptop data show 
  }elseif($pcid==4)
    {
      $sql5="select * from laptop where laptop_id='$byp'";
      $result=mysqli_query($connect,$sql5);
      $row5=mysqli_fetch_assoc($result);
      $offprice=$row5['laptop_price']*2;
      echo '
      <div class="card d-flex flex-row border-0 " >
      <div class="card border-0">
      ';
        ?>
        <img class="card-img-top img-fluid" src="product_img/<?php echo $row['image']; ?>" style="width:24rem;"
            alt="Card image cap">
        <?php
      echo'
      </div>
      <div class="card-body mx-5 " id="mycard">
      <div class="container text-center">
      <h2 class="card-text t d-inline-block"><b>'.$row5['laptop_name'].'</b> </h2> <strong > <i> </i></strong>
        </div>
       
        <button class="btn bg-light " id="pricebutton"><strong class="text-success">10% Off <strike>'.$offprice.'</strike></strong><b text-dark> ₹'.$row5['laptop_price'].'</b></button>
        <p class="card-text">'.$row5['laptop_specification'].'</p>
        
        <div class="selected shadow my-5">
      
         <option>Product Ditaile</option>
          <option value="1">name :'.' '. $row5['laptop_name'].'</option>
          <option value="1">Brand :'.' '. $row5['laptop_company'].'</option>
          <option value="2">RAM :'.' '.$row5['laptop_ram'].'</option>
          <option value="3">Battery :'.' '.$row5['laptop_battery_inforamtion'].'</option>
         
          <hr>
      
          <option class="  mybtm col-12 my-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><strong>More Product Detaile</strong></option>
          
         
        </div>
        '.$row5['laptop_decription'].'
      

        <form action="access.php?pcid='.$pcid.'" method="post" class=" mt-2 bg-warning btn border-0 d-block shadow  btn-lg active mb-0" role="button" >
        <input type="hidden" value="'.$row5["laptop_id"].'" name="pid">
        <input type="submit" value="Bay" class="border-0 bg-warning" >
      </form>
        
        
      </div>
     
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detailes </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <option value="2">Name :'.' '.$row5['laptop_name'].'</option>
        <option value="2">Company :'.' '.$row5['laptop_company'].'</option>
        <option value="4">RAM :'.' '.$row5['laptop_ram'].'</option>
        <option value="5">Storage : '.' '.$row5['laptop_storage'].'</option>
        <option value="7">Network support : '.' '.$row5['laptop_network'].'</option>
        <option value="6">Processor : '.' '.$row5['laptop_processor'].'</option>
        <option value="7">camera : '.' '.$row5['laptop_camera'].'</option>
        <option value="7">Display : '.' '.$row5['laptop_display'].'</option>
        <option value="3">Battery :'.' '.$row5['laptop_battery_inforamtion'].'</option>
        <option value="7">charger : '.' '.$row5['laptop_charger'].'</option>
        <option value="7">worrenty : '.' '.$row5['laptop_warrenty'].'</option>
        <option value="7">organizing : '.' '.$row5['laptop_orgnizing'].'</option>
        <option value="7">Manufacturing : '.' '.$row5['laptop_manifacturing'].'</option>


      </div>
     
    </div>
  </div>
</div>
  ';
  // shirt data show 
  }elseif($pcid==5)
    {
      $sql5="select * from shirtpant where shirtpant_id='$byp'";
      $result=mysqli_query($connect,$sql5);
      $row5=mysqli_fetch_assoc($result);
      $offprice=$row5['shirtpant_price']*2;
      echo '
      <div class="card d-flex flex-row border-0 " >
      <div class="card border-0">
      ';
        ?>
        <img class="card-img-top img-fluid" src="product_img/<?php echo $row['image']; ?>" style="width:24rem;"
            alt="Card image cap">
        <?php
      echo'
      </div>
      <div class="card-body mx-5 " id="mycard">
      <div class="container text-center">
      <h2 class="card-text t d-inline-block"><b>'.$row5['shirtpant_brand'].'</b> </h2> <strong > <i> '.$row5['shirtpant_patter'].'</i></strong>
        </div>
       
        <button class="btn bg-light " id="pricebutton"><strong class="text-success">10% Off <strike>'.$offprice.'</strike></strong><b text-dark> ₹'.$row5['shirtpant_price'].'</b></button>
        <p class="card-text">'.$row5['shirtpant_specification'].'</p>
        
        <div class="selected shadow my-5">
        
        
        
         
         <option>Product Ditaile</option>
          <option value="1">name :'.' '. $row5['shirtpant_brand'].'</option>
          <option value="2">color :'.' '.$row5['shirtpant_color'].'</option>
          <option value="3">gender :'.' '.$row5['gender'].'</option>
         
          <hr>
      
          <option class="  mybtm col-12 my-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><strong>More Product Detaile</strong></option>
          
         
        </div>
        '.$row5['shirtpant_decription'].'
      

        <form action="access.php?pcid='.$pcid.'" method="post" class=" mt-2 bg-warning btn border-0 d-block shadow  btn-lg active mb-0" role="button" >
        <input type="hidden" value="'.$row5["shirtpant_id"].'" name="pid">
        <input type="submit" value="Bay" class="border-0 bg-warning" >
      </form>
        
        
      </div>
     
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detailes </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <option value="2">Name :'.' '.$row5['shirtpant_brand'].'</option>
        <option value="3">color :'.' '.$row5['shirtpant_color'].'</option>
        <option value="4">Patter :'.' '.$row5['shirtpant_patter'].'</option>
        <option value="5">Fabric : '.' '.$row5['shirtpant_fabric'].'</option>
        <option value="6">Quntity : '.' '.$row5['shirtpant_quantity'].'</option>
        <option value="7">Gender : '.' '.$row5['gender'].'</option>
        <option value="7">size : '.' '.$row5['shirtpant_size'].'</option>
        <option value="7">Manufacturing : '.' '.$row5['short_manufacturing'].'</option>
        <option value="7">organizing : '.' '.$row5['orgnizing_contry'].'</option>


      </div>
     
    </div>
  </div>
</div>



    ';
    // pant show data 
    }elseif($pcid==6)
    {
      $sql5="select * from shirtpant where shirtpant_id='$byp'";
      $result=mysqli_query($connect,$sql5);
      $row5=mysqli_fetch_assoc($result);
      $offprice=$row5['shirtpant_price']*2;
      echo '
      <div class="card d-flex flex-row border-0 " >
      <div class="card border-0">
      ';
        ?>
        <img class="card-img-top img-fluid" src="product_img/<?php echo $row['image']; ?>" style="width:24rem;"
            alt="Card image cap">
        <?php
      echo'
      </div>
      <div class="card-body mx-5 " id="mycard">
      <div class="container text-center">
      <h2 class="card-text t d-inline-block"><b>'.$row5['shirtpant_brand'].'</b> </h2> <strong > <i> '.$row5['shirtpant_patter'].'</i></strong>
        </div>
       
        <button class="btn bg-light " id="pricebutton"><strong class="text-success">10% Off <strike>'.$offprice.'</strike></strong><b text-dark> ₹'.$row5['shirtpant_price'].'</b></button>
        <p class="card-text">'.$row5['shirtpant_specification'].'</p>
        
        <div class="selected shadow my-5">
        
        
        
         
         <option>Product Ditaile</option>
          <option value="1">name :'.' '. $row5['shirtpant_brand'].'</option>
          <option value="2">color :'.' '.$row5['shirtpant_color'].'</option>
          <option value="3">gender :'.' '.$row5['gender'].'</option>
         
          <hr>
      
          <option class="  mybtm col-12 my-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><strong>More Product Detaile</strong></option>
          
         
        </div>
        '.$row5['shirtpant_decription'].'
      

        <form action="access.php?pcid='.$pcid.'" method="post" class=" mt-2 bg-warning btn border-0 d-block shadow  btn-lg active mb-0" role="button" >
        <input type="hidden" value="'.$row5["shirtpant_id"].'" name="pid">
        <input type="submit" value="Bay" class="border-0 bg-warning" >
      </form>
        
        
      </div>
     
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detailes </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <option value="2">Name :'.' '.$row5['shirtpant_brand'].'</option>
        <option value="3">color :'.' '.$row5['shirtpant_color'].'</option>
        <option value="4">Patter :'.' '.$row5['shirtpant_patter'].'</option>
        <option value="5">Fabric : '.' '.$row5['shirtpant_fabric'].'</option>
        <option value="6">Quntity : '.' '.$row5['shirtpant_quantity'].'</option>
        <option value="7">Gender : '.' '.$row5['gender'].'</option>
        <option value="7">size : '.' '.$row5['shirtpant_size'].'</option>
        <option value="7">Manufacturing : '.' '.$row5['short_manufacturing'].'</option>
        <option value="7">organizing : '.' '.$row5['orgnizing_contry'].'</option>


      </div>
     
    </div>
  </div>
</div>
    ';

//  sadi data show 
    }elseif($pcid==7)
    {
      $sql5="select * from shirtpant where shirtpant_id='$byp'";
      $result=mysqli_query($connect,$sql5);
      $row5=mysqli_fetch_assoc($result);
      $offprice=$row5['shirtpant_price']*2;
      echo '
      <div class="card d-flex flex-row border-0 " >
      <div class="card border-0">
      ';
        ?>
        <img class="card-img-top img-fluid" src="product_img/<?php echo $row['image']; ?>" style="width:24rem;"
            alt="Card image cap">
        <?php
      echo'
      </div>
      <div class="card-body mx-5 " id="mycard">
      <div class="container text-center">
      <h2 class="card-text t d-inline-block"><b>'.$row5['shirtpant_brand'].'</b> </h2> <strong > <i> '.$row5['shirtpant_patter'].'</i></strong>
        </div>
       
        <button class="btn bg-light " id="pricebutton"><strong class="text-success">10% Off <strike>'.$offprice.'</strike></strong><b text-dark> ₹'.$row5['shirtpant_price'].'</b></button>
        <p class="card-text">'.$row5['shirtpant_specification'].'</p>
        
        <div class="selected shadow my-5">
        
        
        
         
         <option>Product Ditaile</option>
          <option value="1">name :'.' '. $row5['shirtpant_brand'].'</option>
          <option value="2">color :'.' '.$row5['shirtpant_color'].'</option>
          <option value="3">gender :'.' '.$row5['gender'].'</option>
         
          <hr>
      
          <option class="  mybtm col-12 my-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><strong>More Product Detaile</strong></option>
          
         
        </div>
        '.$row5['shirtpant_decription'].'
      

        <form action="access.php?pcid='.$pcid.'" method="post" class=" mt-2 bg-warning btn border-0 d-block shadow  btn-lg active mb-0" role="button" >
        <input type="hidden" value="'.$row5["shirtpant_id"].'" name="pid">
        <input type="submit" value="Bay" class="border-0 bg-warning" >
      </form>
        
        
      </div>
     
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detailes </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <option value="2">Name :'.' '.$row5['shirtpant_brand'].'</option>
        <option value="3">color :'.' '.$row5['shirtpant_color'].'</option>
        <option value="4">Patter :'.' '.$row5['shirtpant_patter'].'</option>
        <option value="5">Fabric : '.' '.$row5['shirtpant_fabric'].'</option>
        <option value="6">Quntity : '.' '.$row5['shirtpant_quantity'].'</option>
        <option value="7">Gender : '.' '.$row5['gender'].'</option>
        <option value="7">size : '.' '.$row5['shirtpant_size'].'</option>
        <option value="7">Manufacturing : '.' '.$row5['short_manufacturing'].'</option>
        <option value="7">organizing : '.' '.$row5['orgnizing_contry'].'</option>


      </div>
     
    </div>
  </div>
</div>

    ';

    }




      
    }

  //   <select class="myhover mt-3 col-6">
  //  
  //  </select>







    // when only set bayp id 
  }elseif(isset($_GET['bayp']))
  {
    // laptop show data on recent section 
    $sql5="select * from laptop where laptop_id='$byp'";
      $result=mysqli_query($connect,$sql5);
      $row5=mysqli_fetch_assoc($result);
      if($row5>0){
        $pcid=$row5['product_id'];
      $offprice=$row5['laptop_price']*2;
      echo '
      <div class="card d-flex flex-row border-0 " >
      <div class="card border-0">
      ';
        ?>
        <img class="card-img-top img-fluid" src="product_img/<?php echo $row['image']; ?>" style="width:24rem;"
            alt="Card image cap">
        <?php
      echo'
      </div>
      <div class="card-body mx-5 " id="mycard">
      <div class="container text-center">
      <h2 class="card-text t d-inline-block"><b>'.$row5['laptop_name'].'</b> </h2> <strong > <i> </i></strong>
        </div>
       
        <button class="btn bg-light " id="pricebutton"><strong class="text-success">10% Off <strike>'.$offprice.'</strike></strong><b text-dark> ₹'.$row5['laptop_price'].'</b></button>
        <p class="card-text">'.$row5['laptop_specification'].'</p>
        
        <div class="selected shadow my-5">
      
         <option>Product Ditaile</option>
          <option value="1">name :'.' '. $row5['laptop_name'].'</option>
          <option value="1">Brand :'.' '. $row5['laptop_company'].'</option>
          <option value="2">RAM :'.' '.$row5['laptop_ram'].'</option>
          <option value="3">Battery :'.' '.$row5['laptop_battery_inforamtion'].'</option>
         
          <hr>
      
          <option class="  mybtm col-12 my-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><strong>More Product Detaile</strong></option>
          
         
        </div>
        '.$row5['laptop_decription'].'
      
        <form action="access.php?pcid='.$pcid.'" method="post" class=" mt-2 bg-warning btn border-0 d-block shadow  btn-lg active mb-0" role="button" >
        <input type="hidden" value="'.$row5["laptop_id"].'" name="pid">
        <input type="submit" value="Bay" class="border-0 bg-warning" >
      </form>
        
        
        
      </div>
     
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detailes </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <option value="2">Name :'.' '.$row5['laptop_name'].'</option>
        <option value="2">Company :'.' '.$row5['laptop_company'].'</option>
        <option value="4">RAM :'.' '.$row5['laptop_ram'].'</option>
        <option value="5">Storage : '.' '.$row5['laptop_storage'].'</option>
        <option value="7">Network support : '.' '.$row5['laptop_network'].'</option>
        <option value="6">Processor : '.' '.$row5['laptop_processor'].'</option>
        <option value="7">camera : '.' '.$row5['laptop_camera'].'</option>
        <option value="7">Display : '.' '.$row5['laptop_display'].'</option>
        <option value="3">Battery :'.' '.$row5['laptop_battery_inforamtion'].'</option>
        <option value="7">charger : '.' '.$row5['laptop_charger'].'</option>
        <option value="7">worrenty : '.' '.$row5['laptop_warrenty'].'</option>
        <option value="7">organizing : '.' '.$row5['laptop_orgnizing'].'</option>
        <option value="7">Manufacturing : '.' '.$row5['laptop_manifacturing'].'</option>


      </div>
     
    </div>
  </div>
</div>
    ';
  // not match laptop id then check other mobile table 
    }else{
      // mobile data show on recent section 
      $sql5="select * from mobile where mobile_id='$byp'";
      $result=mysqli_query($connect,$sql5);
      $row5=mysqli_fetch_assoc($result);
     
      if($row5>0){
        $pcid=$row5['product_id'];
      $offprice=$row5['mobile_price']*2;
      echo '
      <div class="card d-flex flex-row border-0 " >
      <div class="card border-0">
      ';
        ?>
        <img class="card-img-top img-fluid" src="product_img/<?php echo $row['image']; ?>" style="width:24rem;"
            alt="Card image cap">
        <?php
      echo'
      </div>
      <div class="card-body mx-5 " id="mycard">
      <div class="container text-center">
      <h2 class="card-text t d-inline-block"><b>'.$row5['mobile_name'].'</b> </h2> <strong > <i> </i></strong>
        </div>
       
        <button class="btn bg-light " id="pricebutton"><strong class="text-success">10% Off <strike>'.$offprice.'</strike></strong><b text-dark> ₹'.$row5['mobile_price'].'</b></button>
        <p class="card-text">'.$row5['mobile_specification'].'</p>
        
        <div class="selected shadow my-5">
      
         <option>Product Ditaile</option>
          <option value="1">name :'.' '. $row5['mobile_name'].'</option>
          <option value="1">Brand :'.' '. $row5['mobile_company'].'</option>
          <option value="2">RAM :'.' '.$row5['mobile_ram'].'</option>
          <option value="3">Display :'.' '.$row5['mobile_display_specification'].'</option>
         
          <hr>
      
          <option class="  mybtm col-12 my-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><strong>More Product Detaile</strong></option>
          
         
        </div>
        '.$row5['mobile_decription'].'
      

        <form action="access.php?pcid='.$pcid.'" method="post" class=" mt-2 bg-warning btn border-0 d-block shadow  btn-lg active mb-0" role="button" >
        <input type="hidden" value="'.$row5["mobile_id"].'" name="pid">
        <input type="submit" value="Bay" class="border-0 bg-warning" >
      </form>
        
        
      </div>
     
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detailes </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <option value="2">Name :'.' '.$row5['mobile_name'].'</option>
        <option value="2">Company :'.' '.$row5['mobile_company'].'</option>
        <option value="4">RAM :'.' '.$row5['mobile_ram'].'</option>
        <option value="5">Storage : '.' '.$row5['mobile_storage'].'</option>
        <option value="7">Network support : '.' '.$row5['mobile_network'].'</option>
        <option value="6">Processor : '.' '.$row5['mobile_processor'].'</option>
        <option value="7">selfe : '.' '.$row5['moblie_frount_camera'].'</option>
        <option value="7">rear camera  : '.' '.$row5['mobile_rear_camera'].'</option>
        <option value="7">Battray : '.' '.$row5['mobile_battry'].'</option>
        <option value="7">charger : '.' '.$row5['mobile_charger'].'</option>
        <option value="7">worrenty : '.' '.$row5['mobile_worrenty'].'</option>
        <option value="7">organizing : '.' '.$row5['mobile_orgnizing'].'</option>
        <option value="7">Manufacturing : '.' '.$row5['mobile_manifacturing'].'</option>
      </div>
     
    </div>
  </div>
</div>
    ';
      // not match mobile id then check other shirtpant id 
      }else{
        // shirtpant data show recent section 
        $sql5="select * from shirtpant where shirtpant_id='$byp'";
        $result=mysqli_query($connect,$sql5);
        $row5=mysqli_fetch_assoc($result);
        $pcid=$row5['product_id'];
  
  
        if($row5>0){
        $offprice=$row5['shirtpant_price']*2;
        echo '
        <div class="card d-flex flex-row border-0 " >
        <div class="card border-0">
        ';
          ?>
        <img class="card-img-top img-fluid" src="product_img/<?php echo $row['image']; ?>" style="width:24rem;"
            alt="Card image cap">
        <?php
        echo'
        </div>
        <div class="card-body mx-5 " id="mycard">
        <div class="container text-center">
        <h2 class="card-text t d-inline-block"><b>'.$row5['shirtpant_brand'].'</b> </h2> <strong > <i> '.$row5['shirtpant_patter'].'</i></strong>
          </div>
         
          <button class="btn bg-light " id="pricebutton"><strong class="text-success">10% Off <strike>'.$offprice.'</strike></strong><b text-dark> ₹'.$row5['shirtpant_price'].'</b></button>
          <p class="card-text">'.$row5['shirtpant_specification'].'</p>
          
          <div class="selected shadow my-5">
          
          
          
           
           <option>Product Ditaile</option>
            <option value="1">name :'.' '. $row5['shirtpant_brand'].'</option>
            <option value="2">color :'.' '.$row5['shirtpant_color'].'</option>
            <option value="3">gender :'.' '.$row5['gender'].'</option>
           
            <hr>
        
            <option class="  mybtm col-12 my-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" title="click to more Detaile"><strong>More Product Detaile</strong></option>
            
           
          </div>
          '.$row5['shirtpant_decription'].'
        
  
          <form action="access.php?pcid='.$pcid.'" method="post" class=" mt-2 bg-warning btn border-0 d-block shadow  btn-lg active mb-0" role="button" >
        <input type="hidden" value="'.$row5["shirtpant_id"].'" name="pid">
        <input type="submit" value="Bay" class="border-0 bg-warning" >
      </form>
          
          
        </div>
       
      </div>
  
  
  
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detailes </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
          <option value="2">Name :'.' '.$row5['shirtpant_brand'].'</option>
          <option value="3">color :'.' '.$row5['shirtpant_color'].'</option>
          <option value="4">Patter :'.' '.$row5['shirtpant_patter'].'</option>
          <option value="5">Fabric : '.' '.$row5['shirtpant_fabric'].'</option>
          <option value="6">Quntity : '.' '.$row5['shirtpant_quantity'].'</option>
          <option value="7">Gender : '.' '.$row5['gender'].'</option>
          <option value="7">size : '.' '.$row5['shirtpant_size'].'</option>
          <option value="7">Manufacturing : '.' '.$row5['short_manufacturing'].'</option>
          <option value="7">organizing : '.' '.$row5['orgnizing_contry'].'</option>
  
  
        </div>
       
      </div>
    </div>
  </div>
  
      ';
        
        }

      }

    }

  }

   
  // <button type="submit" class="btn btn-primary">Submit</button>

// $sql2="select * from "
// $_GET['sm'];

    
    ?>

    </div>
    <script>



    </script>
</body>

</html>