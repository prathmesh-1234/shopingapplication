<?php
// session_id();
// session_start();

include 'userdata.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST['name'];
    $password=$_POST['password'];
    $loginselect=$_POST['loginselect'];

    if( $loginselect=="user"){
        // check user is user 
    if(!empty($username) && !empty($password))
    // check password and name of user is not empty
    {
        // check name existe in database 
        $sql1="select * from singup where name='$username' ";
        $result=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result);
        $num=mysqli_num_rows($result);
        // user name and password exsit in user table then 
        if($num==1)
        {
            // create session of user name and loging true 
            session_start();
            $_SESSION["name"]=$row['name'];
            $_SESSION["user"]=$row['name'];
            $_SESSION["login"]=true;
            $sessionvalue=$_SESSION["login"];
            
            header("location: main.php?page/#&*!@@$%");

        }else{
            header("location: main.php?notfound=p");
          
        }
        
    }else{
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>username and password not match  </strong>username and password is not match.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        ';
    }
    // check admin is send request to login 
}elseif($loginselect=="admin")
{
    // check admin name and password is not empty
    if(!empty($username) && !empty($password))
    {
        // check admin name exsite in database 
        $sql2="select * from admins where name='$username' ";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        $num2=mysqli_num_rows($result2);
        // admin name and password is existe in admin table then 
        if($num2==1)
        {
            // create session of admin name and session login 
            session_start();
            $_SESSION["name"]=$row2['name'];
            $_SESSION["login"]=true;
            $_SESSION["admin"]=$row2['name'];
            $myvalue=$_SESSION["login"];
            header("location: adminhome.php?id=$myvalue");

        }else{
            header("location: main.php?notfound=p");
        //     echo '
        //     <div class="alert alert-danger alert-dismissible fade show" role="alert">
        //   <strong>you are account not created  </strong> your singin to create account  .
        //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        // </div>
        //     ';
        }
        
    }else{
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>username and password not match  </strong>username and password is not match.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        ';
    }

}


}

?>