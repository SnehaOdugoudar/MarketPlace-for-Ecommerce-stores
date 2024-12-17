<h2>Last five previously viewed Services</h2>
<?php
    //print_r($_COOKIE);
    $setOfPossibleKeys='rootcanalimplantsbracesveneerscrowningfillingsdentureswhiteningGumwisdomteeth';
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
    
    $servicename = array();
    $serviceimage = array();
    foreach ($_COOKIE as $key => $value) {
        array_push($servicename,$key);
        array_push($serviceimage,$value);
    }
    $size = sizeof($servicename);
    // echo $size;            
    

    if(isset($_COOKIE["lastVisitedIds"]))
    {
        $hits = explode(",",$_COOKIE["lastVisitedIds"]);
        $viewed = array();
        for($i=0; $i<5 and $i<sizeof($hits); $i++)
        {
            $hit=$hits[$i];
            print( "<h3>$hit</h3><br>
            <img src=$idToUrlMapping[$hit] width=\"300\" height =\"200\">");  
        }
    }
    else
    {
        echo "You have not viewed any products";
    }

?>