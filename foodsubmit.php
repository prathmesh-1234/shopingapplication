<?php
// include database productdb 
    include 'productdb.php';

    // check request is post 
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && isset($_POST['food_id'])) {
        $food_name = $_POST['food_name'];
        $food_quantity = $_POST['food_quantity'];
        $food_qualitiy = $_POST['food_qualitiy'];
        $food_specification = $_POST['food_specification'];
        $food_price = $_POST['food_price'];
        $food_orgnizing = $_POST['food_orgnizing'];
        $food_id = $_POST['food_id'];
        $food_decription = $_POST['food_decription'];
        $show=true;
        // check food name is not empty 

        if (empty($food_name)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter food name </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check food quantity is not empty
        } elseif (empty($food_quantity)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter food quantity </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check food qualitiy is not empty
        } elseif (empty($food_qualitiy)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter food qualitiy </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check food specifiaction is not empty
        } elseif (empty($food_specification)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter food specifiaction </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check food price is not empty
        } elseif (empty($food_price)) {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter food price to scaling  </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        // check food orgnizing is not empty
        }elseif(empty($food_orgnizing)){
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter food contry orgnizing  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';

            // check  food_decription is not empty

        }elseif (empty($food_decription)) {

            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>please enter food infromation about your product </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        ';
        } else {
          // insert data in food table 

            $sql="INSERT INTO `food`(`food_name`, `food_quantity`, `food_qualitiy`, `food_specification`, `food_price`, `food_orgnizing`, `food_id`, `food_decription`) VALUES ('$food_name','$food_quantity','$food_qualitiy','$food_specification','$food_price','$food_orgnizing','$food_id','$food_decription')";
            $result=mysqli_query($connect,$sql);

 

        //    ="insert into food values('$food_name','$food_quantity','$food_qualitiy','$food_specification','$food_price','$food_orgnizing','$food_id','$food_decription')";
         
            if($result)
            {
                header("location:food.php?show=".$show);
               

            }else{
                $show=false;
                header("location:food.php?show=".$show);

            }
           
            
        }

    }
    // else{

    //     echo '
    //         <div class="alert alert-warning alert-dismissible fade show" role="alert">
    //       <strong>please select food froute or vagitable </strong> 
    //       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //       </div>
    //         ';
    // }
 
    

    ?>