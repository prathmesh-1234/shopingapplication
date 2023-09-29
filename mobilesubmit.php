<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage/admin/user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->

    




<?php

include 'productdb.php';

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit']))
{
    $product_id=$_POST['product_id'];
    $mobile_name=$_POST['mobile_name'];
    $mobile_ram=$_POST['mobile_ram'];
    $mobile_storage=$_POST['mobile_storage'];
    $mobile_processor=$_POST['mobile_processor'];
    $moblie_frount_camera=$_POST['moblie_frount_camera'];
    $mobile_rear_camera=$_POST['mobile_rear_camera'];
    $mobile_company=$_POST['mobile_company'];
    $mobile_charger=$_POST['mobile_charger'];
    $mobile_battry=$_POST['mobile_battry'];
    $mobile_display_specification=$_POST['mobile_display_specification'];
    $mobile_specification=$_POST['mobile_specification'];
    $mobile_price=$_POST['mobile_price'];
    $mobile_orgnizing=$_POST['mobile_orgnizing'];
    $mobile_manifacturing=$_POST['mobile_manifacturing'];
    $mobile_worrenty=$_POST['mobile_worrenty'];
    $mobile_id=$_POST['mobile_id'];
    $mobile_network=$_POST['mobile_network'];
    $mobile_decription=$_POST['mobile_decription'];
    $file_name=$_FILES['file_name']['name'];
    
  
   


    if(empty($product_id))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter moblie name </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile  name is not empty
    }elseif(empty($mobile_name)){
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter moblie name </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // header("location : mobile.php?show=1");
        // check mobile ram  is not empty
    }
    elseif(empty($mobile_ram) )
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>your moblie RAM  please enter !  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile storage  is not empty
    }elseif(empty($mobile_storage))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>your moblie  Storage empty please enter !  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile processro  is not empty
    }elseif(empty($mobile_processor))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>your moblie processor empty please enter !  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile frount camera is not empty
    }
    elseif(empty($moblie_frount_camera) )
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>your moblie camera information !  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile rear camera  is not empty
    }elseif(empty($mobile_rear_camera))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>your moblie camera information !  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile company  is not empty
    }
    elseif(empty($mobile_company))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter company name </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile charger  is not empty
    }elseif(empty($mobile_charger))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter charger information </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile display specification  is not empty
    }elseif(empty($mobile_display_specification))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter display information ! </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile specification  is not empty
    }elseif(empty($mobile_specification))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter  mobile fectures  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile price  is not empty
    }elseif(empty($mobile_price))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter moblie price  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile organizing  is not empty
    }elseif(empty($mobile_orgnizing))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter contry organizer  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile manifacturing is not empty
    }elseif(empty($mobile_manifacturing))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter mobile manifacturing information </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile  worrenty is not empty
    }elseif(empty($mobile_worrenty))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter mobile worrenty/garrnty</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile  id  is not empty
    }elseif(empty($mobile_id))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter moblie id </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile  network  is not empty
    }elseif(empty($mobile_network))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter network support mobile </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check mobile description is not empty
    }elseif(empty($mobile_decription))
    {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please mobile more information  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
    }elseif(empty($file_name))
    {
      echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please upload mobile photos </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';

    }else{
      $temp_file=$_FILES['file_name']['tmp_name'];
      $file_size=$_FILES['file_name']['size'];
      $folder="product_img/".$file_name;
      $explod=explode(".",$file_name);
      $lowarcase=strtolower(end($explod));
      $extention=array("jpg","png","jpeg");
      if(in_array($lowarcase,$extention))
      {
        $sql3="select * from product_image where product_id='$mobile_id'";
        $result3=mysqli_query($connect,$sql3);
        $row=mysqli_fetch_assoc($result3);
        if($row>0)
        {
         
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Id is already exsit please insert another id   </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
    
           

        }else{
        $sql="INSERT INTO `mobile` (`product_id`, `mobile_name`, `mobile_ram`, `mobile_storage`, `mobile_processor`, `moblie_frount_camera`, `mobile_rear_camera`, `mobile_company`, `mobile_charger`, `mobile_battry`, `mobile_display_specification`, `mobile_specification`, `mobile_price`, `mobile_orgnizing`, `mobile_manifacturing`, `mobile_worrenty`, `mobile_id`, `mobile_network`, `mobile_decription`) VALUES ('$product_id', '$mobile_name', '$mobile_ram', '$mobile_storage', '$mobile_processor', '$moblie_frount_camera ', '$mobile_rear_camera', '$mobile_company', '$mobile_charger', '$mobile_battry', '$mobile_display_specification ', '$mobile_specification  ', '$mobile_price', '$mobile_orgnizing', '$mobile_manifacturing ', '$mobile_worrenty  ', '$mobile_id', '$mobile_network', '$mobile_decription  ')";
         $sql2="INSERT INTO product_image values('$mobile_id','$file_name')";
        $result2=mysqli_query($connect,$sql2);
        $result=mysqli_query($connect,$sql);
        if($result && $result2){
          move_uploaded_file($temp_file,$folder);
          echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>save successfully  </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          ';
  
         }else{
          // header("location:mobile.php?show=2");
         }
        }


      }else{
          echo '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>your photo extention is not jpg png jpeg  </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          ';
         }
      }

      // insert data in mobile table in procudes database 

      

       

     



    }
    // header("location:mobile.php?show=2");




?>






<!-- </body>
</html> -->




