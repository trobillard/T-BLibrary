<?php
include "view/template/nav.php";
include "view/template/header.php";
?>
<div class="mainpage">
<h2>Add a Book</h2>
<form action="" method="POST">
    <div class="form-row">
        <div class="form-group col-md-5 my-3">
            <label for="title">Title :</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="책 제목" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="author">Author :</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="저자" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="publication_date">Publication date :</label>
            <input type="date" class="form-control" name="publication_date" id="publication_date" placeholder="일/월/년" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="category">Category :</label>
            <input type="text" class="form-control" name="category" id="category" placeholder="범주" required>
        </div>
        <div class="form-group col-5 my-3">
            <label for="summary">Summary :</label>
            <textarea class="form-control" name="summary" id="summary" rows="5" placeholder="요약" required></textarea>
            <small class="form-text text-muted">Remaining caracter : <span id="count"></span></small>
            <small id="messageHelp" class="form-text text-muted"></small>
        </div>
    </div>
    <button type="submit" class="form-group col-5 my-3 btn btn1" >Add</button>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
      <label class="form-check-label" for="flexCheckDefault">
        Validate the information
      </label>
    </div>
</form>
</div>

<?php
    include "view/template/footer.php";
?>