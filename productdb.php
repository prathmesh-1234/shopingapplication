<!-- commane for all products -->
<!-- product image table  -->
<!-- "INSERT INTO product_image value('$short_id','$short_photo')"; -->
<?php
$server="localhost";
$username="root";
$password="";
$database="product";
$connect=mysqli_connect($server,$username,$password,$database);

?>
<!-- mobile table  -->
<!-- $sql="INSERT INTO `mobile` (`product_id`, `mobile_name`, `mobile_ram`, `mobile_storage`, `mobile_processor`, `moblie_frount_camera`, `mobile_rear_camera`, `mobile_company`, `mobile_charger`, `mobile_battry`, `mobile_display_specification`, `mobile_specification`, `mobile_price`, `mobile_orgnizing`, `mobile_manifacturing`, `mobile_worrenty`, `mobile_id`, `mobile_network`, `mobile_decription`) VALUES ('$product_id', '$mobile_name', '$mobile_ram', '$mobile_storage', '$mobile_processor', '$moblie_frount_camera ', '$mobile_rear_camera', '$mobile_company', '$mobile_charger', '$mobile_battry', '$mobile_display_specification ', '$mobile_specification  ', '$mobile_price', '$mobile_orgnizing', '$mobile_manifacturing ', '$mobile_worrenty  ', '$mobile_id', '$mobile_network', '$mobile_decription  ')"; -->

<!-- laptop table  -->
<!-- INSERT INTO `laptop` (`laptop_id'`, `laptop_name`, `laptop_ram`, `laptop_storage`, `laptop_camera`, `laptop_processor`, `laptop_company`, `laptop_battery_inforamtion`, `laptop_charger`, `laptop_display`, `laptop_network`, `laptop_specification`, `laptop_warrenty`, `laptop_price`, `laptop_manifacturing`, `laptop_orgnizing`, `laptop_decription`, `electronics_id`) VALUES ('4', 'Avita liber v14 pro', '8GB 16GB', '512SSD', '12MP', 'RIZEN 5 3550 octa core ', 'Avita', '35000MH ', 'Adaptor 35W', 'ips without baseals display', 'wifi Bluetooth support', 'avita liber v14 have 6 port HDMI HDR memory chargin port this laptop in easy to multasking mode and performed opretion clock speed processor is 3.5 extends upto 5.5 Ram is extends upto 8GB ', '1 year warrenty and extends uptop 3 months extra ', '38999', 'mumbai east avita manifacturing facility maharasty india', 'india', 'this laptop made for multitasking light gaming and best performance', '0'); -->

<!-- food table  -->

<!-- food table:- $sql="insert into food values('$food_name','$food_quantity','$food_qualitiy','$food_specification','$food_price','$food_orgnizing','$food_id','$food_decription')"; -->

<!-- shirt/pant/lehanga table  -->

<!-- "INSERT INTO `shirtpant`(`product_id`, `shirtpant_brand`, `shirtpant_id`, `shirtpant_quantity`, `shirtpant_color`, `shirtpant_fabric`, `shirtpant_patter`, `shirtpant_specification`, `gender`, `orgnizing_contry`, `shirtpant_size`, `shirtpant_decription`) VALUES ('$product_id','$short_brand','$short_id','$short_quantity','$short_color','$short_fabric','$short_patter','$short_specification','$mela.$female','$orgnizing_contry','$sm.$m.$xl.$xxl','$short_decription')"; -->