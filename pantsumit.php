<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage/admin/user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-image: url("icons/background.jpg");
        }
    </style>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->


    <?php
    require 'productdb.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $product_id = $_POST['product_id'];
        $pant_brand = $_POST['pant_brand'];
        $pant_id = $_POST['pant_id'];
        $pant_quantity = $_POST['pant_quantity'];
        $pant_color = $_POST['pant_color'];
        $pant_fabric = $_POST['pant_fabric'];
        $pant_patter = $_POST['pant_patter'];
        $pant_specification = $_POST['pant_specification'];
        $pant_price=$_POST['pant_price'];
        $pant_manufacturing=$_POST['pant_manufacturing'];
        if (isset($_POST['mela'])) {
            $mela = $_POST['mela'];
        }else{
            $mela=null;
        }
        if (isset($_POST['female'])) {
            $female = $_POST['female'];
        }else{
            $female=null;
        }
        $orgnizing_contry = $_POST['orgnizing_contry'];
        if (isset($_POST['sm'])) {
            $sm = $_POST['sm'];
        }else{
            $sm=null;
        }
        if (isset($_POST['m'])) {
            $m = $_POST['m'];
        }else{
            $m=null;
        }
        if (isset($_POST['xl'])) {
            $xl = $_POST['xl'];
        }else{
            $xl=null;
        }
        if (isset($_POST['xxl'])) {
            $xxl = $_POST['xxl'];
        }else{
            $xxl=null;
        }
        $pant_decription = $_POST['pant_decription'];
        $pant_photo = $_FILES['pant_photo']['name'];


        if (empty($pant_brand)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter pant brand name </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($pant_id)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter  pant id  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($pant_quantity)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter  pant quantity </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($pant_color)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter pant color </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($pant_fabric)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter pant fabric </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($pant_patter)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter pant patter </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($pant_specification)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>you are not enter pant shpecification/specialyti </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        }elseif(empty($pant_price))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>you enter price is empty </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';

        }
        
        elseif(empty($pant_manufacturing))
        {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>pant manufacturing is empty  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';

        }
         elseif (empty($orgnizing_contry)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter contry organizing  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($pant_decription)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter decription  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($pant_photo)) {

            echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>upload your product photo  </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
        } else {
            // shirt photo temp file 
            $temp_photo = $_FILES['pant_photo']['tmp_name'];
            // shirt photo size 
            $photo_size = $_FILES['pant_photo']['size'];
            // folder to save photo 
            $folder = "product_img/" . $pant_photo;
            $explod = explode(".", $pant_photo);
            $lowarcase = strtolower(end($explod));
            $extenton = array("jpg", "jpeg", "png");
            // check photo extention is jpg png jpeg 
            if (in_array($lowarcase, $extenton)) {
                $sql3 = "select * from product_image where product_id='$pant_id'";
                $result3 = mysqli_query($connect, $sql3);
                $row = mysqli_fetch_assoc($result3);
                // check id is already exsite or not in product_image table 
                if ($row > 0) {
                    // if exist id in database then move on shirptant page
                    // header("location:pants.php?exist=1");
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Id is already exsit please insert other is </strong> 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    ';
                } else {
                //    not exsit id in database then insert value in databases 
                    // insert shirt in shirpant table 
                    $sql = "INSERT INTO `shirtpant`(`product_id`, `shirtpant_brand`, `shirtpant_id`, `shirtpant_quantity`, `shirtpant_color`, `shirtpant_fabric`, `shirtpant_patter`, `shirtpant_specification`,`shirtpant_price`, `short_manufacturing`,`gender`, `orgnizing_contry`, `shirtpant_size`, `shirtpant_decription`) VALUES ('$product_id','$pant_brand','$pant_id','$pant_quantity','$pant_color','$pant_fabric','$pant_patter','$pant_specification','$pant_price', '$pant_manufacturing','$mela $female','$orgnizing_contry','$sm $m $xl $xxl','$pant_decription')";
                  
                    // insert shirt image in product_image table  
                    $sql2 = "INSERT INTO product_image value('$pant_id','$pant_photo')";
                    $result = mysqli_query($connect, $sql);
                    $result2 = mysqli_query($connect, $sql2);
                    if ($result && $result2) {
                        move_uploaded_file($temp_photo, $folder);
                        // header("location:pants.php?msg=1");
                        echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>submit successfully......... </strong> 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    ';
                    }
                }
            } else {
                echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>check your photo extention is not png jpg jpeg  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
            }
        }
    }

    ?>




</body>

</html>