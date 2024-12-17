<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>contacts</title>

  </head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <h1 style="text-align: center;" ><b>HITHA DENTALS </b></h1>

<form method="POST" action="insertUserDetailsToDB.php">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">First name</label>
        <input type="text" id="FirstName" name="FirstName" class="form-control" />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example2">Last name</label>
        <input type="text" id="LastName" name="LastName" class="form-control" />
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example3">Email Address</label>
    <input type="text" id="EmailAddress" name="EmailAddress" class="form-control" />
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example4">House Address</label>
    <input type="text" id="HouseAddress" name="HouseAddress" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example5">Home Phone Number</label>
    <input type="text" id="HomePhoneNumber" name="HomePhoneNumber" class="form-control" />
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example6">Mobile Phone Number</label>
    <input type="text" id="MobilePhoneNumber" name="MobilePhoneNumber" class="form-control" />
  </div>




  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Submit</button>
</form>

</body>
</head>