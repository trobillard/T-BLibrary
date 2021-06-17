<?php
include "view/template/nav.php";
include "view/template/header.php";
if(!isset($error)):
?>
<div class="mainpage">
<h2>User Information</h2>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Lastname</th>
                <th scope="col">Firstname</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">City Code</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
              <tr>
                <th scope="row"><?php echo $user->getLibrary_Number(); ?></th>
                <td><?php echo $user->getLastName(); ?></td>
                <td><?php echo $user->getFirstName(); ?></td>
                <td><?php echo $user->getBirth_Date(); ?></td>
                <td><?php echo $user->getAdress(); ?></td>
                <td><?php echo $user->getCity(); ?></td>
                <td><?php echo $user->getCity_Code(); ?></td>
                <td><?php echo $user->getPhone(); ?></td>
                <td><?php echo $user->getEmail(); ?></td>
              </tr>
        </tbody>
    </table>
</div>
<?php else: ?>
  <div class="alert alert-danger">
    <p><?php echo $error ?></p>
  </div>
<?php endif; ?>

<?php
include "view/template/footer.php";
?>
