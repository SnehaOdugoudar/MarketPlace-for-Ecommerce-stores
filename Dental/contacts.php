<?php
include("config.php");
include("contactInfo.php");
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
    <?php include "navbar.php"?>
    <div class="card" style="width: 30rem;" >
      <div class="card-body">
      <h3 class="card-title">Contact Details</h3>
      <p id="mobile_number">Tel: <?PHP echo getHospitalInfo("Phone Number") ?></p>
      <p id="email_address">Address:<?PHP echo getHospitalInfo("Hospital Address") ?></p>
      <p id="email_address">Email:<?PHP echo getHospitalInfo("Email") ?></p>
      <h5><b>Timings:</b></h5>
      <p id="day-1"><b>Monday:</b><?PHP echo getHospitalInfo("Monday") ?></p>
      <p id="day-2"><b>Tuesday:</b><?PHP echo getHospitalInfo("Tuesday") ?></p>
      <p id="day-2"><b>Wednesday:</b><?PHP echo getHospitalInfo("Wednesday") ?></p>
      <p id="day-2"><b>Thursday:</b><?PHP echo getHospitalInfo("Thursday") ?></p>
      <p id="day-2"><b>Friday:</b><?PHP echo getHospitalInfo("Friday") ?></p>
      <p id="day-2"><b>Saturday:</b><?PHP echo getHospitalInfo("Saturday") ?></p>
      <p id="day-2"><b>Sunday:</b><?PHP echo getHospitalInfo("Sunday") ?></p>
      </div>
</body>
</html>