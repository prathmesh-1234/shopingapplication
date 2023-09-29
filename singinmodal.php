<?php
// includ database connetion file in this singinmodal file 
// session_start();
include 'userdata.php';
// echo $_SESSION["select"];
// if($_SESSION["select"]=="user")
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  // check from in method request is post 
  $name=$_POST['name'];
  $password=$_POST['password'];
  $cpass=$_POST['cpassword'];
  $singinselect=$_POST['select'];
  $sql1="select * from singup where name='$name'";
  // admin table data check 
  $sql3="select * from admins where name='$name'";
  // user table connection 
  $result1=mysqli_query($conn,$sql1);
  // admin table connection 
  $result3=mysqli_query($conn,$sql3);
  // user table row fetch 
  $row1=mysqli_fetch_assoc($result1);
  // admin table row fetch 
  $row2=mysqli_fetch_assoc($result3);
  // if select user then 

  if( $singinselect=="user"){
  if(empty($name))
  {
    // check user name is empty 
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your name is empty </strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';

  }elseif($row1>0)
  // check user name is alredy exsit on database 
  {  
    if($password!=$cpass)
    { 
      // check confirm password is not equal to password alert
      echo '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>password not match </strong> please enter right password .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
      ';
    }else{
      // account is alerdy exsit then show this alert 
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your account is alredy exist </strong> You are created already account in user.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
    }
// check password is empty or not 
  }elseif(!empty($password)){
    // check password is == confirm password 
    if($password==$cpass)
    { 



      $pass=password_hash($password,PASSWORD_DEFAULT);
      $sql2="insert into singup values(null,'$name','$pass')";
      $result2=mysqli_query($conn,$sql2);
      
     
      if($result2){
         // data insert in database success massage 
        echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Singin successfully.........</strong> your account created successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
      ';
      }
      
    }else{
      // password not match alert 
      echo '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>password not match </strong> please enter right password .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
      ';
    }
  }else{
    // password blank alert 

    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Password is blank </strong> You are password is empty
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
  }
}
elseif( $singinselect=="admin")
{
  if(empty($name))
  {
    // check user name is empty 
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your name is empty </strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';

  }elseif($row2>0)
  // check user name is alredy exsit on database 
  {  
    if($password!=$cpass)
    { 
      // check confirm password is not equal to password alert
      echo '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>password not match </strong> please enter right password .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
      ';
    }else{
      // account is alerdy exsit then show this alert 
    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your account is alredy exist </strong> you are created already account in admin .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
    }// check password is empty or not 
  }elseif(!empty($password)){
    // check password is == confirm password 
    if($password==$cpass)
    { 
      // if admin is singup then insert data in admins datatable 
      $pass=password_hash($password,PASSWORD_DEFAULT);
      $sql4="insert into admins values(null,'$name','$pass')";
      $result4=mysqli_query($conn,$sql4);
      
     
      if($result4){
         // data insert in database success massage 
        echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Singin successfully.........</strong> your account created successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
      ';
      }
      
    }else{
      // password not match alert 
      echo '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>password not match </strong> please enter right password .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
      ';
    }
  }else{
    // password blank alert 

    echo '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Password is blank </strong> You are password is empty
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';
  }




}else{
  echo '
    <div class="alert alert-danger alert-dismissible fade show ft-4" role="alert">
  <strong >you are selcte user </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    ';

}



}


// }

?>
<?php
if(isset($_COOKIE["select"])){
echo '
<!-- modal section is start  -->
<div class="modal" id="singinmodal" tabindex="-1" aria-labelledby="singupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="singupmodalLabel">Singin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form of singup section start  -->
        <form action="main.php" method="post" >
          <div class="mb-3">
            
            <input type="input" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
            <input type="hidden" class="form-control" name="select" value="'.$_COOKIE["select"].'" id="exampleInputEmail1" aria-describedby="emailHelp" >
          </div>
          <div class="mb-3">
            <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder=" password">
          </div>
          <div class="mb-3">
            <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
            <input type="password" class="form-control" name="cpassword"  id="exampleInputPassword1" placeholder="confirm password">
          </div>
          <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">submite</button>
      </div> -->
    </div>
  </div>
</div>';
}
?>


