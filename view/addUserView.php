<?php
include "view/template/nav.php";
include "view/template/header.php";
?>
<div class="mainpage">
<h2>Add a User</h2>
<form action="" method="POST">
    <div class="form-row">
        <div class="form-group col-md-5 my-3">
            <label for="lastname">Lastname :</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="성 " required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="firstname">Firstname :</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="이름" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="birth_date">Birthdate :</label>
            <input type="date" class="form-control" name="birth_date" id="birth_date" placeholder="일/월/년" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="adress">Address :</label>
            <input type="text" class="form-control" name="adress" id="adress" placeholder="주소" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="city">City :</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="시티" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="city_code">Zip Code :</label>
            <input type="text" class="form-control" name="city_code" id="city_code" placeholder="우편 번호 (10100)" pattern="[0-9]{5}" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="phone">Phone :</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="821012341234" pattern="[2-8]{2}[0-1]{2}[0-9]{4}[0-9]{4}" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="email">Email :</label>
            <input type="email" class="form-control" name="email" id="email" size="30" placeholder="name@example.com" required>
        </div>
        <div class="form-group col-md-5 my-3">
            <label for="library_number">Library Number :</label>
            <input type="text" class="form-control" name="library_number" id="library_number" placeholder="도서관 번호 (99999)" pattern="[0-9]{5}"required>
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