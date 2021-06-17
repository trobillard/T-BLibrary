<?php
include "view/template/nav.php";
include "view/template/header.php";
?>
<div class="mainpage">
<h2>Book's list</h2>

<div class="mx-auto">
        <table class="table table-striped text-center">
          <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Publication Date</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Borrowed by</th>
                <th scope="col">Book </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($books as $book) : ?>
              <tr>
                <th scope="row"><?php echo $book->getBook_Id(); ?></th>
                <td><?php echo $book->getTitle(); ?></td>
                <td><?php echo $book->getAuthor(); ?></td>
                <td><?php echo $book->getPublication_Date(); ?></td>
                <td><?php echo $book->getCategory(); ?></td>
                <td><?php echo $book->getCategory(); ?></td>
                <td><?php echo $book->getCategory(); ?></td>
                <td><a href="book.php?book_id=<?php echo $book->getBook_Id(); ?>" class="btn btn-primary text-dark px-4">Details</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
            </div>
<?php
    include "view/template/footer.php";
?>
