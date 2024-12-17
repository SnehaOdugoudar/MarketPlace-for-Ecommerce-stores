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
    <title>Services</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <h1 style="text-align: center;" ><b>HITHA DENTALS </b></h1>
    <?php include "navbar.php"?>
    <p>Recently Viewed</p>
    <a href="recentViews.php" class="btn btn-primary">Recently Viewed</a><br></br>
    <h2>OUR SERVICES</h2>

    <!-- <div class="row row-cols-1 row-cols-md-3 g-4"> -->
  <div class="component">
  <div class="row row-cols-2 g-3">
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100 ">
        <img src="https://images.squarespace-cdn.com/content/v1/54a34b09e4b01e05d9a08133/1491344814161-K4GYH6QGEMJ07ISDPBTX/Root-Canals-Explained.jpg" class="card-img-top" alt="root-canal-image">
        <div class="card-body">
          <h5 class="card-title">Root Canal</h5>
          <a href="products.php?id=rootcanal" class="btn btn-primary">View Product</a>
          <p>A root canal is performed when the endodontist removes the infected pulp and nerve in the root of the tooth, cleans and shapes the inside of the root canal, then fills and seals the space. Afterward, your dentist will place a crown on the tooth to protect and restore it to its original function.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://cdn-prod.medicalnewstoday.com/content/images/articles/327/327515/an-infographic-showing-how-dental-implants-work.jpg" class="card-img-top" alt="implants-image">
        <div class="card-body">
          <h5 class="card-title">Dental Implants</h5>
          <a href="products.php?id=implants" class="btn btn-primary">View Product</a>
          <p>Dental implants are artificial structures that a dental surgeon inserts into a person’s jawbone. A person may need an implant if they have lost one or more teeth.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://www.healthcaffe.com/wp-content/uploads/2022/04/s2.png" class="card-img-top" alt="braces-image">
        <div class="card-body">
          <h5 class="card-title">Braces/Invisalign</h5>
          <a href="products.php?id=braces" class="btn btn-primary">View Product</a>
          <p>Besides giving you a beautiful smile, straightening your teeth improves your overall oral health. Straightening your teeth aligns your jaw and corrects your bite, and it also helps you stave off cavities because straight teeth are easier to clean. When you are considering orthodontics to get your teeth straightened, two of the most popular choices for treatment are traditional braces or Invisalign.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://www.starbritedental.com/wp-content/uploads/2019/07/porcelain-veneers.jpg" class="card-img-top" alt="veeners-image">
        <div class="card-body">
          <h5 class="card-title">Veneers</h5>
          <a href="products.php?id=veneers" class="btn btn-primary">View Product</a>
          <p>A veneer is a permanent change used to correct tooth imperfections, such as stained or chipped teeth. Veneers are thin porcelain or composite resin coverings that are bonded to the front surface of a tooth using dental cement.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://tysonsdentalspava.com/wp-content/uploads/2020/12/Dental-Crowns.jpg" class="card-img-top" alt="crowning-image">
        <div class="card-body">
          <h5 class="card-title">Crowning</h5>
          <a href="products.php?id=crowning" class="btn btn-primary">View Product</a>
          <p>An impression will be made of your trimmed tooth and the surrounding teeth. The dentist will put a temporary crown over your tooth to protect it. They send the impression to a lab that makes the crown.</p>
        </div>
      </div>
    </div>
    <!-- here -->
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://www.123dentist.com/wp-content/uploads/2018/04/dental-fillings.jpg" class="card-img-top" alt="crowning-image">
        <div class="card-body">
          <h5 class="card-title">Dental Fillings</h5>
          <a href="products.php?id=fillings" class="btn btn-primary">View Product</a>
          <p>Dental restoration, dental fillings, or simply fillings are treatments used to restore the function, integrity, and morphology of missing tooth structure resulting from caries or external trauma as well as to the replacement of such structure supported by dental implants.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://smileangels.com/wp-content/uploads/2020/01/fixed-partial-dentures-fixed.jpg" class="card-img-top" alt="crowning-image">
        <div class="card-body">
          <h5 class="card-title">Dentures</h5>
          <a href="products.php?id=dentures" class="btn btn-primary">View Product</a>
          <p>Dentures are prosthetic devices constructed to replace missing teeth, and are supported by the surrounding soft and hard tissues of the oral cavity. Conventional dentures are removable. However, there are many denture designs, some which rely on bonding or clasping onto teeth or dental implants.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://www.lajollafamilysmiledesign.com/wp-content/uploads/2021/04/image42.jpg" class="card-img-top" alt="crowning-image">
        <div class="card-body">
          <h5 class="card-title">Teeth Whitening</h5>
          <a href="products.php?id=whitening" class="btn btn-primary">View Product</a>
          <p>Tooth whitening or tooth bleaching is the process of lightening the color of human teeth. Whitening is often desirable when teeth become yellowed over time for a number of reasons, and can be achieved by changing the intrinsic or extrinsic color of the tooth enamel.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://northhillsperio.com/wp-content/uploads/Periodontal-Disease.jpg" class="card-img-top" alt="crowning-image">
        <div class="card-body">
          <h5 class="card-title">Periodontal (Gum) Treatment</h5>
          <a href="products.php?id=Gum" class="btn btn-primary">View Product</a>
          <p>A serious gum infection that damages gums and can destroy the jawbone.Periodontitis is common but fairly preventable. The cause is usually poor oral hygiene. Periodontitis can lead to tooth loss. It's a risk factor for heart and lung diseases.Symptoms include swollen, red, and tender gums.Treatment includes professionally cleaning the pockets around teeth to prevent damage to surrounding bone. Advanced cases may require surgery.</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 col-md-4">
      <div class="card h-100">
        <img src="https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2013/11/15/17/44/an01961_-ds00679_-my01212_im03691_de7_wisdomteeththu_jpg.jpg" class="card-img-top" alt="crowning-image">
        <div class="card-body">
          <h5 class="card-title">Wisdom Teeth</h5>
          <a href="products.php?id=wisdomteeth" class="btn btn-primary">View Product</a>
          <p>impacted wisdom teeth that are causing pain or other dental problems are usually surgically removed (extracted). Extraction of a wisdom tooth is usually required for: Infection or gum disease (periodontal disease) involving the wisdom teeth.</p>
        </div>
      </div>
    </div>
  </div>

  </div>
  
</body>
</html>



