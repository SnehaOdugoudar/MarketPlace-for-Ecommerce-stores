<?php
include("config.php");
include("contactInfo.php");
if(session_status() === PHP_SESSION_NONE){
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dental Website for CMPE 272 </title>
    <link rel="stylesheet" href="style.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <h1 style="text-align: center;" ><b>HITHA DENTALS </b></h1>

    <?php include "navbar.php"?>
    <div style="display:none" id="comp-l8zfv7ernavContainer-hiddenA11ySubMenuIndication">
        Use tab to navigate through the menu items.
    </div>
    <div class="about">
      <h2>About</h2>
      <p>At HITHA Dentals our doctors prioritize your smile more than anything. Assured quality of treatment, we are specalized in root-canals & implants.
        For your convenience, our services are available in English, Telugu,Hindi, and spanish. Call us today to make your appointment with Drs. Snigdha , Vikas.
      </p>
    </div>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="width: 100%; height: 600px;">
      <img src="https://assets.newatlas.com/dims4/default/85f5c6d/2147483647/strip/true/crop/2000x1333+0+329/resize/1200x800!/quality/90/?url=http%3A%2F%2Fnewatlas-brightspot.s3.amazonaws.com%2F30%2Ff7%2Fad04c4ce4477b4f71c56e44ddc32%2Fdepositphotos-53100907-l.jpg" class="rounded mx-auto d-block" alt="...">
    </div>
    <div class="carousel-item " style="width: 100%; height: 600px;">
      <img src="https://www.oasisdentalep.com/wp-content/uploads/2020/07/banner2.jpg" class="rounded mx-auto d-block" alt="...">
    </div>
    <div class="carousel-item " style="width: 100%; height: 600px;">
      <img src="https://cdn.bangkokhospital.com/2020/04/IHL-Cn-Digital-Smile-Veneer.jpg" class="rounded mx-auto d-block" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



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
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

