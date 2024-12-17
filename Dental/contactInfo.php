<?php
function getHospitalInfo($Tag){
  $file= file_get_contents("contacts.txt");
  $hospitalInfo= explode("\n",$file);
  list($HospitalNameTag , $HospitalNamevalue) = explode(":" , $hospitalInfo[1]);
  list($PhoneNumberTag , $PhoneNumbervalue) = explode(":" , $hospitalInfo[2]);
  list($AddressTag , $Addressvalue) = explode(":" , $hospitalInfo[3]);
  list($EmailTag,$Emailvalue)=explode(":" , $hospitalInfo[4]);
  $dayWiseTimings=explode(",",$hospitalInfo[6]);
  list($day1,$status1)=explode(":",$dayWiseTimings[0]);
  list($day2,$status2)=explode(":",$dayWiseTimings[1]);
  list($day3,$status3)=explode(":",$dayWiseTimings[2]);
  list($day4,$status4)=explode(":",$dayWiseTimings[3]);
  list($day5,$status5)=explode(":",$dayWiseTimings[4]);
  list($day6,$status6)=explode(":",$dayWiseTimings[5]);
  list($day7,$status7)=explode(":",$dayWiseTimings[6]);
  $HospitalInfo = array(
    $HospitalNameTag => $HospitalNamevalue,
    $PhoneNumberTag => $PhoneNumbervalue,
    $AddressTag =>  $Addressvalue,
    $EmailTag=>$Emailvalue,
    $day1=>$status1,
    $day2=>$status2,
    $day3=>$status3,
    $day4=>$status4,
    $day5=>$status5,
    $day6=>$status6,
    $day7=>$status7,
  );
return $HospitalInfo[$Tag];

}

?>
