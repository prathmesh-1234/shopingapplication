<!-- loginmodal  -->
<?php
if(isset($_COOKIE["select"])){
  // if cookie is set then 
echo '
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="loginmodalLabel">login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form of singup section start  -->
        <form action="login.php" method="post" >
          <div class="mb-3">
            
            <input type="input" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
            <input type="hidden" name="loginselect" value="'. $_COOKIE["select"].'">
          </div>
          <div class="mb-3">
            <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder=" password">
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
</div>
';
}
// else{
//   // cookie is not set than 
//   echo '
//       <div class="alert alert-warning alert-dismissible fade show" role="alert">
//     <strong>You are not selected user </strong> .
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>
//       ';
// }
?>

<!-- <div class="mb-3"> -->
            <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
            <!-- <input type="password" class="form-control" name="cpassword"  id="exampleInputPassword1" placeholder="confirm password">
          </div> -->