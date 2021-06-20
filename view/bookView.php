<?php
include "view/template/nav.php";
include "view/template/header.php";
if(!isset($error)):
?>
<div class="mainpage">
<h2>Book Information</h2>
    <div class="row mt-5">
      <div class="col-12 col-md-12 col-lg-12">
        <article class="card">
          <div class="card-header">
            <h5 class="card-title"><?php echo $book->getTitle() ; ?></h5>
            <h5 class="card-title"><?php echo $book->getAuthor(); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Published :<?php echo $book->getPublication_date(); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Category :<?php echo $book->getCategory(); ?></h6>
            <h6 class="card-subtitle mb-2 text-muted">Book Ref : <?php echo $book->getBook_Id(); ?></h6>
            <h6 class="card-subtitle mb-2 ">Availability : </h6>
            <h6 class="card-subtitle mb-2 ">Rent by : </h6>
          </div>
          <div class="card-body">
          <h6 class="card-subtitle mb-2 ">Summary : </h6>
            <ul class="list-group list-group-flush border-bottom mb-2">
              <li class="list-group-item"><?php echo $book->getSummary(); ?></li>
            </ul>
            <a href="#" class="btn btn-info">Rent/Unrent</a>
            <a href="deletebook.php?book_id=<?php echo $book->getBook_Id(); ?>" class="btn btn-danger">Delete</a>
          </div>
        </article>
        <a href="books.php" class="btn btn1">Books List</a>
      </div>
</div>
<?php else: ?>
  <div class="alert alert-danger">
    <p><?php echo $error ?></p>
  </div>
<?php endif; ?>

<?php
include "view/template/footer.php";
?>

<!-- <table class="table table-striped text-center"> -->
        <!-- <thead> -->
            <!-- <tr> -->
                <!-- <th scope="col">ID</th> -->
                <!-- <th scope="col">Title</th> -->
                <!-- <th scope="col">Author</th> -->
                <!-- <th scope="col">Summary</th> -->
                <!-- <th scope="col">Publication Date</th> -->
                <!-- <th scope="col">Categorie</th> -->
                <!-- <th scope="col">Borrowed by</th> -->
                <!-- <th scope="col">In Stock</th> -->
            <!-- </tr> -->
        <!-- </thead> -->
        <!-- <tbody> -->
              <!-- <tr> -->
                <!-- <th scope="row"><?php echo $book->getBook_Id(); ?></th> -->
                <!-- <td><?php echo $book->getTitle(); ?></td> -->
                <!-- <td><?php echo $book->getAuthor(); ?></td> -->
                <!-- <td><?php echo $book->getSummary(); ?></td> -->
                <!-- <td><?php echo $book->getPublication_date(); ?></td> -->
                <!-- <td><?php echo $book->getCategory(); ?></td> -->
                <!-- <td><a href="deletebook.php?book_id=<?php echo $book->getBook_Id(); ?>" class="btn btn-danger">Delete Book</a></td> -->
                
              <!-- </tr> -->
        <!-- </tbody> -->
    <!-- </table> -->

