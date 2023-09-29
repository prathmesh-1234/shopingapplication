<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navegation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

    <!-- navbar of shop  -->
    <?php
// session is stared 

$admin="admin";
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


  <div class="container-fluid d-flex "  >
  <a class="navbar-brand" href="#" id="navdropdown">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto flex-row flex-wrap mb-2 mb-lg-0" >
        <li class="nav-item mx-4 " id="navdropdown">
          <a class="nav-link active text-white " aria-current="page" href="main.php">Home</a>
        </li>
      
      </ul>
      <form class="d-flex " role="search"  >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="forms">
        <button class="btn btn-outline-success" id="mybtn" type="submit" onclick="scearch()">Search</button>
      </form>
      <div class="dropdown ">
      <button class="btn btn-outline-success mx-2 " dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="mybtn">
        select users
      </button>
      <ul class="dropdown-menu dropdown-menu-dark">
        <li class="dropdown-item">
     <form action="main.php" method= "get" > 
          <div class="mb-3">
            <input type="hidden" name="selection" value="user" class="form-control" >
          </div>
          <button type="submit" name="use"  class="btn btn-outline-success  " id="mybtn">user</button>
      </form>
        </li>
        <li class="dropdown-item">
        <form action="main.php" method="get " > 
          <div class="mb-3">
            <input type="hidden" name="selection" value="admin" class="form-control" >
          </div>
          <button type="submit" name="use" class="btn btn-outline-success " id="mybtn">Admin</button>
      </form>
      <li>
      </ul>
    </div>
       ';
      
      if(isset($_SESSION["login"]) && $_SESSION["login"]==true){
        // check session is set then
        echo'
        <button class="btn btn-outline-success mx-2 mx-sm-0" id="mybtn">Welcome '. $_SESSION["name"].'</button>
        <button class="btn btn-outline-success mx-2 " ><a class="nav-link" href="logout.php">Logout</a></button>';
        
      }else{
        // session is not set then 
        echo '
      <button class="btn btn-outline-success mx-2 " data-bs-toggle="modal" data-bs-target="#loginmodal" type="submit" id="mybtn">Login</button>
      <button class="btn btn-outline-success mx-2 " id="mybtn"data-bs-toggle="modal" data-bs-target="#singinmodal" type="submit">Singup</button>
      ';
      }echo '
    </div>
  </div>
</nav>';
include 'loginmodal.php';
// include singinmodal in navegation page to access modal 
include 'singinmodal.php';
// when user login successfuly 
// if(isset($_SESSION['login']))
// {
//   echo '
//     <div class="alert alert-success alert-dismissible fade show" role="alert">
//     <strong>Login successfully...</strong> .
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>
//     ';
// }

?>

    <?php
// include loginmodal in navegation page to access modal


?>

</body>


</html>