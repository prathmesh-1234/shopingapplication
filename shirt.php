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
        $short_brand = $_POST['short_brand'];
        $short_id = $_POST['short_id'];
        $short_quantity = $_POST['short_quantity'];
        $short_color = $_POST['short_color'];
        $short_fabric = $_POST['short_fabric'];
        $short_patter = $_POST['short_patter'];
        $short_specification = $_POST['short_specification'];
        $shirtpant_price=$_POST['shirtpant_price'];
        $short_manufacturing=$_POST['short_manufacturing'];
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
        $short_decription = $_POST['short_decription'];
        $short_photo = $_FILES['short_photo']['name'];


        if (empty($short_brand)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter shirt brand name </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($short_id)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter shirt id  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($short_quantity)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter shirt quantity </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($short_color)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter shirt color </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($short_fabric)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter shirt fabric </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($short_patter)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter shirt patter </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($short_specification)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>you are not enter shirt shpecification/specialyti </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        
        }elseif(empty($shirtpant_price)){
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>you are not enter product price </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';

        }
        elseif(empty($short_manufacturing))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>enter manifacutring details </strong> 
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
        } elseif (empty($short_decription)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter decription  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($short_photo)) {

            echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>upload your product photo  </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
        } else {
            // shirt photo temp file 
            $temp_photo = $_FILES['short_photo']['tmp_name'];
            // shirt photo size 
            $photo_size = $_FILES['short_photo']['size'];
            // folder to save photo 
            $folder = "product_img/" . $short_photo;
            $explod = explode(".", $short_photo);
            $lowarcase = strtolower(end($explod));
            $extenton = array("jpg", "jpeg", "png");
            // check photo extention is jpg png jpeg 
            if (in_array($lowarcase, $extenton)) {
                $sql3 = "select * from product_image where product_id='$short_id'";
                $result3 = mysqli_query($connect, $sql3);
                $row = mysqli_fetch_assoc($result3);
                // check id is already exsite or not in product_image table 
                if ($row > 0) {
                    // if exist id in database then move on shirptant page
                    // header("location:shirtpant.php?exist=1");
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Id is already exsit please Insert other shirt id  </strong> 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    ';
                } else {
                    
                    
                //    not exsit id in database then insert value in databases 
                    // insert shirt in shirpant table 
                    $sql = "INSERT INTO `shirtpant`(`product_id`, `shirtpant_brand`, `shirtpant_id`, `shirtpant_quantity`, `shirtpant_color`, `shirtpant_fabric`, `shirtpant_patter`, `shirtpant_specification`,`shirtpant_price`,`short_manufacturing`, `gender`, `orgnizing_contry`, `shirtpant_size`, `shirtpant_decription`) VALUES ('$product_id','$short_brand','$short_id','$short_quantity','$short_color','$short_fabric','$short_patter','$short_specification','$shirtpant_price','$short_manufacturing','$mela $female','$orgnizing_contry','$sm $m $xl $xxl','$short_decription')";
                  
                    // insert shirt image in product_image table  
                    $sql2 = "INSERT INTO product_image value('$short_id','$short_photo')";
                    $result = mysqli_query($connect, $sql);
                    $result2 = mysqli_query($connect, $sql2);
                    if ($result && $result2) {
                        move_uploaded_file($temp_photo, $folder);
                        // header("location:shirtpant.php?msg=1");\
                        echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>submit successfully........... </strong> 
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