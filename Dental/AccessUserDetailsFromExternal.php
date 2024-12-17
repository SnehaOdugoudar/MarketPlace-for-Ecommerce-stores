<?php
// $curl= curl_init("http://localhost/272/CurlAuthByPassLogin.php");
$curl= curl_init("https://suchandranath-bajjuri.000webhostapp.com/CurlAuthByPassLogin.php");
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$html = curl_exec($curl);

if(!empty($curl)){
    $thispage=new DOMDocument;
    libxml_use_internal_errors(true);
    $thispage->loadHTML($html);
    libxml_clear_errors();
    // echo "here3";
    $xpath= new DOMXPath($thispage);
    
}else{
    echo "invalid curl";
}
// id19652164_hitha_dentals == Hitha_dentals
$servername = "localhost";
$username = "id19652164_root";
// $username = "root";
$password = "Suchi@123Suchi@123";
// $password = "";
$database = "id19652164_hitha_dentals";
// $database = "Hitha_dentals";
$conn=new mysqli($servername,$username,$password,$database) or die('Unable to connect');
$select_users=mysqli_query($conn," SELECT * FROM User_Details ");

$rows= mysqli_fetch_all($select_users);
// print_r($rows);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <h1 style="text-align: center;" ><b>MERGED TABLE </b></h1>

    <p>The users in light blue color are from other market place</p>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">Name
          </th>
          <th class="th-sm">Email Address
          </th>
          <th class="th-sm">Home Address
          </th>
          <th class="th-sm">Phone Number
          </th>
        </tr>
      </thead>
      <tbody>
        <?php 
        for($i=0;$i<sizeof($rows);$i++){?>
          <tr>
            <td><?php echo $rows[$i][0]; echo " "; echo $rows[$i][1]; ?></td>
            <td><?php echo $rows[$i][2]; ?></td>
            <td><?php echo $rows[$i][3]; ?></td>
            <td><?php echo $rows[$i][5]; ?></td>
          </tr>
        <?php }?>
        <?php 
        for($i=1;$i<21;$i++){?>
          <tr >
            <td bgcolor="lightsteelblue"><?php echo $xpath->evaluate('string(//*[@id="dtBasicExample"]/tbody/tr[' . $i . ']/td[2])'); ?></td>
            <td bgcolor="lightsteelblue"><?php echo $xpath->evaluate('string(//*[@id="dtBasicExample"]/tbody/tr[' . $i . ']/td[2])'); ?></td>
            <td bgcolor="lightsteelblue"><?php echo $xpath->evaluate('string(//*[@id="dtBasicExample"]/tbody/tr[' . $i . ']/td[3])'); ?></td>
            <td bgcolor="lightsteelblue"><?php echo $xpath->evaluate('string(//*[@id="dtBasicExample"]/tbody/tr[' . $i . ']/td[4])'); ?></td>
          </tr>
        <?php }?>
        
      </tbody>
      
    </table>
</body>