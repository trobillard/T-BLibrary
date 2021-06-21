<?php
include "view/template/nav.php";
include "view/template/header.php";

?>
<div class="mainpage">
<h2>User Information</h2>
    <div class="row mt-5">
      <div class="col-12 col-md-6 col-lg-4">
        <article class="card">
          <div class="card-header">
          <img src="<?php echo $user->getPictuser() ; ?>">
            <h5 class="card-title"><?php echo $user->getLastName(). " " . $user->getFirstName(). " <br>(" .$user->getBirth_Date(). ")"; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Registration number : <?php echo $user->getLibrary_Number(); ?></h6>
            <h6 class="card-subtitle mb-2 text-muted">Member since : <?php echo $user->getRegistration(); ?></h6>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush border-bottom mb-2">
              <li class="list-group-item">Address : <?php echo $user->getAdress() . " " .$user->getCity_Code() . " " . $user->getCity(); ?></li>
              <li class="list-group-item">Phone number : <?php echo $user->getPhone(); ?></li>
              <li class="list-group-item">Email : <?php echo $user->getEmail(); ?></li>
            </ul>
            <a href="deleteuser.php?id=<?php echo $user->getId(); ?>" class="btn btn-danger">Delete</a>
        </article>
      </div>
</div>


<?php
include "view/template/footer.php";
?>

<!-- show user on table -->
<!-- <table class="table table-striped text-center"> -->
        <!-- <thead> -->
            <!-- <tr> -->
                <!-- <th scope="col">ID</th> -->
                <!-- <th scope="col">Lastname</th> -->
                <!-- <th scope="col">Firstname</th> -->
                <!-- <th scope="col">Birthdate</th> -->
                <!-- <th scope="col">Address</th> -->
                <!-- <th scope="col">City</th> -->
                <!-- <th scope="col">City Code</th> -->
                <!-- <th scope="col">Phone</th> -->
                <!-- <th scope="col">Email</th> -->
                <!-- <th scope="col">delete</th> -->
            <!-- </tr> -->
        <!-- </thead> -->
        <!-- <tbody> -->
              <!-- <tr> -->
                <!-- <th scope="row"><?php echo $user->getLibrary_Number(); ?></th> -->
                <!-- <td><?php echo $user->getLastName(); ?></td> -->
                <!-- <td><?php echo $user->getFirstName(); ?></td> -->
                <!-- <td><?php echo $user->getBirth_Date(); ?></td> -->
                <!-- <td><?php echo $user->getAdress(); ?></td> -->
                <!-- <td><?php echo $user->getCity(); ?></td> -->
                <!-- <td><?php echo $user->getCity_Code(); ?></td> -->
                <!-- <td><?php echo $user->getPhone(); ?></td> -->
                <!-- <td><?php echo $user->getEmail(); ?></td> -->
              <!-- </tr> -->
        <!-- </tbody> -->
    <!-- </table> -->