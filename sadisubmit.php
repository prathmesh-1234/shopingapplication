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
        $sadi_brand = $_POST['sadi_brand'];
        $sadi_id = $_POST['sadi_id'];
        $sadi_quantity = $_POST['sadi_quantity'];
        $sadi_color = $_POST['sadi_color'];
        $sadi_fabric = $_POST['sadi_fabric'];
        $sadi_patter = $_POST['sadi_patter'];
        $sadi_specification = $_POST['sadi_specification'];
        $sadi_price=$_POST['sadi_price'];
        $gender=$_POST['gender'];
        $sadi_manufacturing=$_POST['sadi_manufacturing'];
        $orgnizing_contry=$_POST['orgnizing_contry'];
        $sadi_size=$_POST['size'];
        $sadi_decription = $_POST['sadi_decription'];
        $file_photo = $_FILES['sadi_photo']['name'];


        if (empty($sadi_brand)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter sadi brand name </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($sadi_id)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter  sadi id  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($sadi_quantity)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter sadi quantity </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($sadi_color)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter sadi color </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($sadi_fabric)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter sadi fabric </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($sadi_patter)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter sadi patter </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($sadi_specification)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>you are not enter sadi shpecification/specialyti </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        }elseif(empty($sadi_manufacturing))
        {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>sadi manufacturing is empty  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';

        }elseif(empty($sadi_price))
        {
          echo '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>sadi price is empty please enter price  </strong> 
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
        }elseif(empty($sadi_size))
        {
          echo '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>please enter sadi size  </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          ';

        }elseif (empty($sadi_decription)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter decription  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } elseif (empty($file_photo)) {

            echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>upload your product photo  </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
        } else {
            // shirt photo temp file 
            $temp_photo = $_FILES['sadi_photo']['tmp_name'];
            // shirt photo size 
            $photo_size = $_FILES['sadi_photo']['size'];
            // folder to save photo 
            $folder = "product_img/" . $file_photo;
            $explod = explode(".", $file_photo);
            $lowarcase = strtolower(end($explod));
            $extenton = array("jpg", "jpeg", "png");
            // check photo extention is jpg png jpeg 
            if (in_array($lowarcase, $extenton)) {
                $sql3 = "select * from product_image where product_id='$sadi_id'";
                $result3 = mysqli_query($connect, $sql3);
                $row = mysqli_fetch_assoc($result3);
                // check id is already exsite or not in product_image table 
                if ($row > 0) {
                    // if exist id in database then move on shirptant page
                    // header("location:pants.php?exist=1");
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Id is already exsit please insert other id </strong> 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    ';
                } else {
                //    not exsit id in database then insert value in databases 
                    // insert shirt in shirpant table 
                    $sql = "INSERT INTO `shirtpant`(`product_id`, `shirtpant_brand`, `shirtpant_id`, `shirtpant_quantity`, `shirtpant_color`, `shirtpant_fabric`, `shirtpant_patter`, `shirtpant_specification`,`shirtpant_price`, `short_manufacturing`,`gender`, `orgnizing_contry`, `shirtpant_size`, `shirtpant_decription`) VALUES ('$product_id','$sadi_brand','$sadi_id','$sadi_quantity','$sadi_color','$sadi_fabric','$sadi_patter','$sadi_specification','$sadi_price','$sadi_manufacturing','$gender','$orgnizing_contry','$sadi_size','$sadi_decription')";
                  
                    // insert shirt image in product_image table  
                    $sql2 = "INSERT INTO product_image value('$sadi_id','$file_photo')";
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
