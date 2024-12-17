<?php 
// echo $_GET["id"];
$idToNameMapping = array(
    "rootcanal" => "Root Canal",
    "implants" => "Dental Implants",
    "braces" => "Braces/Invisalign",
    "veneers" => "Veneers",
    "crowning" => "Crowning",
    "fillings" => "Dental Fillings",
    "dentures" => "Dentures",
    "whitening" => "Teeth Whitening",
    "Gum" => "Periodontal (Gum) Treatment",
    "wisdomteeth" => "Wisdom Teeth"
);
$idToDescMapping = array(
    "rootcanal" => "A root canal is performed when the endodontist removes the infected pulp and nerve in the root of the tooth, cleans and shapes the inside of the root canal, then fills and seals the space. Afterward, your dentist will place a crown on the tooth to protect and restore it to its original function.",
    "implants" => "Dental implants are artificial structures that a dental surgeon inserts into a person’s jawbone. A person may need an implant if they have lost one or more teeth.",
    "braces" => "Besides giving you a beautiful smile, straightening your teeth improves your overall oral health. Straightening your teeth aligns your jaw and corrects your bite, and it also helps you stave off cavities because straight teeth are easier to clean. When you are considering orthodontics to get your teeth straightened, two of the most popular choices for treatment are traditional braces or Invisalign.",
    "veneers" => "A veneer is a permanent change used to correct tooth imperfections, such as stained or chipped teeth. Veneers are thin porcelain or composite resin coverings that are bonded to the front surface of a tooth using dental cement.",
    "crowning" => "An impression will be made of your trimmed tooth and the surrounding teeth. The dentist will put a temporary crown over your tooth to protect it. They send the impression to a lab that makes the crown.",
    "fillings" => "Dental restoration, dental fillings, or simply fillings are treatments used to restore the function, integrity, and morphology of missing tooth structure resulting from caries or external trauma as well as to the replacement of such structure supported by dental implants.",
    "dentures" => "Dentures are prosthetic devices constructed to replace missing teeth, and are supported by the surrounding soft and hard tissues of the oral cavity. Conventional dentures are removable. However, there are many denture designs, some which rely on bonding or clasping onto teeth or dental implants.",
    "whitening" => "Tooth whitening or tooth bleaching is the process of lightening the color of human teeth. Whitening is often desirable when teeth become yellowed over time for a number of reasons, and can be achieved by changing the intrinsic or extrinsic color of the tooth enamel.",
    "Gum" => "A serious gum infection that damages gums and can destroy the jawbone.Periodontitis is common but fairly preventable. The cause is usually poor oral hygiene. Periodontitis can lead to tooth loss. It's a risk factor for heart and lung diseases.Symptoms include swollen, red, and tender gums.Treatment includes professionally cleaning the pockets around teeth to prevent damage to surrounding bone. Advanced cases may require surgery.",
    "wisdomteeth" => "impacted wisdom teeth that are causing pain or other dental problems are usually surgically removed (extracted). Extraction of a wisdom tooth is usually required for: Infection or gum disease (periodontal disease) involving the wisdom teeth."
);
$idToUrlMapping = array(
    "rootcanal" => "https://images.squarespace-cdn.com/content/v1/54a34b09e4b01e05d9a08133/1491344814161-K4GYH6QGEMJ07ISDPBTX/Root-Canals-Explained.jpg",
    "implants" => "https://cdn-prod.medicalnewstoday.com/content/images/articles/327/327515/an-infographic-showing-how-dental-implants-work.jpg",
    "braces" => "https://www.healthcaffe.com/wp-content/uploads/2022/04/s2.png",
    "veneers" => "https://www.starbritedental.com/wp-content/uploads/2019/07/porcelain-veneers.jpg",
    "crowning" => "https://tysonsdentalspava.com/wp-content/uploads/2020/12/Dental-Crowns.jpg",
    "fillings" => "https://www.123dentist.com/wp-content/uploads/2018/04/dental-fillings.jpg",
    "dentures" => "https://smileangels.com/wp-content/uploads/2020/01/fixed-partial-dentures-fixed.jpg",
    "whitening" => "https://www.lajollafamilysmiledesign.com/wp-content/uploads/2021/04/image42.jpg",
    "Gum" => "https://northhillsperio.com/wp-content/uploads/Periodontal-Disease.jpg",
    "wisdomteeth" => "https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2013/11/15/17/44/an01961_-ds00679_-my01212_im03691_de7_wisdomteeththu_jpg.jpg"
);

if(isset($_COOKIE["lastVisitedIds"])){
    $s='';
    $Curr=explode(",",$_COOKIE["lastVisitedIds"]);
    $sz=sizeof($Curr);
    if(sizeof($Curr)>5){
      $sz=5;
    }
    for($i=0;$i<$sz;$i++){
      $s= $s.$Curr[$i];
    }
    $id=$_GET["id"];

    if(strpos($s,$id) === False){
        setcookie("lastVisitedIds",$_GET["id"].",".$_COOKIE["lastVisitedIds"],time() + (86400 * 30));    
    }
}
else{
    setcookie("lastVisitedIds", $_GET["id"], time() + (86400 * 30));
}
?>
<h2>Detailed Descreption about Service </h2>
<div class="card mb-3">
    <!-- <h3>Here</h3> -->
  <img src="<?php echo $idToUrlMapping[$_GET["id"]]?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?php echo $idToNameMapping[$_GET["id"]]?></h5>
    <p class="card-text"><?php echo $idToDescMapping[$_GET["id"]]?></p>
    <p class="card-text"><small class="text-muted">Further information will be appended later.</small></p>
  </div>
</div>
