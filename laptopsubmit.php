<?php
include 'productdb.php';
// check request method 
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit']))
    {
        $product_id=$_POST['product_id'];
        $laptop_name=$_POST['laptop_name'];
        $laptop_ram=$_POST['laptop_ram'];
        $laptop_storage=$_POST['laptop_storage'];
        $laptop_camera=$_POST['laptop_camera'];
        $laptop_processor=$_POST['laptop_processor'];
        $laptop_company=$_POST['laptop_company'];
        $laptop_battery_inforamtion=$_POST['laptop_battery_inforamtion'];
        $laptop_charger=$_POST['laptop_charger'];
        $laptop_display=$_POST['laptop_display'];
        $laptop_network=$_POST['laptop_network'];
        $laptop_specification=$_POST['laptop_specification'];
        $laptop_warrenty=$_POST['laptop_warrenty'];
        $laptop_price=$_POST['laptop_price'];
        $laptop_manifacturing=$_POST['laptop_manifacturing'];
        $laptop_id=$_POST['laptop_id'];
        $laptop_orgnizing=$_POST['laptop_orgnizing'];
        $laptop_decription=$_POST['laptop_decription'];
        $file_name=$_FILES['file_name']['name'];

        if(empty($laptop_name))
        {
          // check laptop name is not empty
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop name </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop ram e is not empty
        }elseif(empty($laptop_ram))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop ram </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop storage  is not empty
        }elseif(empty($laptop_storage))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop storage  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop camera  is not empty
        }elseif(empty($laptop_camera))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop camera  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop processor  is not empty
        }elseif(empty($laptop_processor))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop processor  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop company is not empty
        }elseif(empty($laptop_company))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop company  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop battte information is not empty
        }elseif(empty($laptop_battery_inforamtion))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop battery information </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop changer is not empty
        }elseif(empty($laptop_charger))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop changer infromation  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop display  is not empty
        }elseif(empty($laptop_display))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop display information  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop network is not empty
        }elseif(empty($laptop_network))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop network  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop specification is not empty
        }elseif(empty($laptop_specification))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop specification </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop warrenty is not empty
        }elseif(empty($laptop_warrenty))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop warrenty  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop price  is not empty
        }elseif(empty($laptop_price))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop price </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop manifacutring is not empty
        }elseif(empty($laptop_manifacturing))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop manifacutring information  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop id  is not empty
        }elseif(empty($laptop_id)){
          echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop id   </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';

            // check laptop contry name  is not empty
        }
        elseif(empty($laptop_orgnizing))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter laptop organizing country  </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // check laptop description is not empty
        }elseif(empty($laptop_decription))
        {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>please enter more information about your product in description </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
            // file name check 
        }elseif(empty($file_name)){
          echo '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Not uploade photo  </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          ';

        }
        else{
          //  temperari file 
          $temp_file=$_FILES['file_name']['tmp_name'];
        //  photo size 
          $filesize=$_FILES['file_name']['size'];
          // folder to move photo 
          $folder="product_img/".$file_name;
          // check photo size is larger then 50KB 
         
            // not 50KB gretor photo size than  
           
            $extention=explode(".",$file_name);
            $lowercase=strtolower(end($extention));
            $extention_array=array("jpg","jpeg","png");
            // check photo extention 
            if(in_array($lowercase,$extention_array))
            {
              $sql3="select * from product_image where product_id='$laptop_id'";
              $result3=mysqli_query($connect,$sql3);
              $row=mysqli_fetch_assoc($result3);
              if($row>0)
              {
                echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Id is already exits please insert another id to product   </strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
              ';

              }else{
              // extention is match then 
               // insert value in procudt database in laptop table
           $sql="INSERT INTO `laptop` (`product_id`, `laptop_name`, `laptop_ram`, `laptop_storage`, `laptop_camera`, `laptop_processor`, `laptop_company`, `laptop_battery_inforamtion`, `laptop_charger`, `laptop_display`, `laptop_network`, `laptop_specification`, `laptop_warrenty`, `laptop_price`, `laptop_manifacturing`,`laptop_id`, `laptop_orgnizing`, `laptop_decription`, `electronics_id`) VALUES ('$product_id', '$laptop_name', '$laptop_ram', '$laptop_storage', '$laptop_camera', '$laptop_processor', '$laptop_company', '$laptop_battery_inforamtion ', '$laptop_charger', '$laptop_display', '$laptop_network', '$laptop_specification','$laptop_warrenty', '$laptop_price', '$laptop_manifacturing','$laptop_id', '$laptop_orgnizing', '$laptop_decription', '0')";

           $result=mysqli_query($connect,$sql);
            // insert into image in product_image table 
           $sql2="INSERT INTO product_image value('$laptop_id','$file_name')";
           $result2=mysqli_query($connect,$sql2);
           
          // data inserted then
          if($result && $result2)
          {
            move_uploaded_file($temp_file,$folder);
            // move on laptop.php file 
            echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> save successfully  </strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
              ';
          }
        }



            }else{
              // extention is not match than
              echo '
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> photo extention is not JPG,PNG,JPEGSS </strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
              ';

            }
            


        
           
         
        }



    }


?>