<?php
include "view/template/nav.php";
include "view/template/header.php";
?>
<div class="mainpage">
<h2>Users list</h2>

<div class="mx-auto">
        <table class="table table-striped text-center">
          <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Lastname</th>
                <th scope="col">Firstname</th>
                <th scope="col">Birth Date</th>
                <th scope="col">City Code</th>
                <th scope="col">City</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $user) : ?>
              <tr>
                <th scope="row"><?php echo $user->getLibrary_Number(); ?></th>
                <td><?php echo $user->getLastName(); ?></td>
                <td><?php echo $user->getFirstName(); ?></td>
                <td><?php echo $user->getBirth_Date(); ?></td>
                <td><?php echo $user->getCity_Code(); ?></td>
                <td><?php echo $user->getCity(); ?></td>
                <td><?php echo $user->getAdress(); ?></td>
                <td><?php echo $user->getPhone(); ?></td>
                <td><?php echo $user->getEmail(); ?></td>
                <td><a href="user.php?library_number=<?php echo $user->getLibrary_Number(); ?>" class="btn btn-primary text-dark px-4">Information</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
            </div>
<?php
    include "view/template/footer.php";
?>
