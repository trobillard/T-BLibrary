<?php
include "view/template/nav.php";
include "view/template/header.php";
?>
<div class="mainpage">
<h2>Add a Book</h2>
<form action="" method="POST">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="title">Title :</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
        </div>
        <div class="form-group col-md-5">
            <label for="author">Author :</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Author" required>
        </div>
        <div class="form-group col-md-2">
            <label for="publication_date">Publication date :</label>
            <input type="date" class="form-control" name="publication_date" id="publication_date" placeholder="year-month-day" required>
        </div>
        <div class="form-group col-md-5">
            <label for="category">Category :</label>
            <input type="text" class="form-control" name="category" id="category" placeholder="Category" required>
        </div>
        <div class="form-group col-10">
            <label for="summary">Summary :</label>
            <textarea class="form-control" name="summary" id="summary" rows="5" placeholder="Summary" required></textarea>
        </div>
    </div>
    <button type="submit" class="my-3 btn btn-success">Add</button>
</form>
</div>

<?php
    include "view/template/footer.php";
?>