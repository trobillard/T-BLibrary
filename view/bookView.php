<?php
include "view/template/nav.php";
include "view/template/header.php";
if(!isset($error)):
?>
<div class="mainpage">
<h2>Book Information</h2>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Summary</th>
                <th scope="col">Publication Date</th>
                <th scope="col">Categorie</th>
                <th scope="col">Borrowed by</th>
                <th scope="col">In Stock</th>
            </tr>
        </thead>
        <tbody>
              <tr>
                <th scope="row"><?php echo $book->getBook_Id(); ?></th>
                <td><?php echo $book->getTitle(); ?></td>
                <td><?php echo $book->getAuthor(); ?></td>
                <td><?php echo $book->getSummary(); ?></td>
                <td><?php echo $book->getPublication_date(); ?></td>
                <td><?php echo $book->getCategory(); ?></td>
                <td><a href="book.php?id=<?php echo $book->getBook_Id(); ?>" class="btn btn-danger">Delete Book</a></td>
                
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

