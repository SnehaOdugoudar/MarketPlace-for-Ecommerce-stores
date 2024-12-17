<?php
  include("config.php");
  session_start();
  if(isset($_SESSION['Username'])){
    if($_SESSION['Username']!='admin' && $_SESSION['Password']!='admin'){ //checking session global value with harcoded admin username
      header("location:index.php"); //if session variables are not created users page cannot be accessed.
    }
  }else{
    header("location:index.php"); 
  } 
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
    <h1 style="text-align: center;" ><b>HITHA DENTALS </b></h1>

    <?php include "navbar.php"?>
    <h4>Welcome <?php echo $_SESSION["Username"]; ?>,</h4>
    <h6>Look At Market Place Users!!</h6><br>
    <h6><a class="nav-link" href="AccessUserDetailsFromExternal.php">Market Place Users</a></h6>
    <h6>Click on the link to access patient Registration Form!!</h6><br>
    <h6><a href="registerPatient.php">Register a Patient</a></h6>
    <form action="Users.php" method="post">
    <div class = "col-4">
      <label> Search in the entire table</label>
      <input type="text" name="valueToSearch" placeholder="Value To Search">
      <input type="submit" name="search" value="Filter"><br><br>
    </div>
    <?php 
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
    // $rows= mysqli_fetch_all($select_users);
    
    function filterTable($query)
    {
        // echo "here-1";
        $servername = "localhost";
        $username = "id19652164_root";
        // $username = "root";
        $password = "Suchi@123Suchi@123";
        // $password = "";
        $database = "id19652164_hitha_dentals";
        // $database = "Hitha_dentals";
        $conn=new mysqli($servername,$username,$password,$database) or die('Unable to connect');
        $filter_Result = mysqli_query($conn, $query);
        return $filter_Result;
    }


    if(isset($_POST['search'])) 
    {
      // echo "here-2";
      $valueToSearch = $_POST['valueToSearch'];
      if(empty($valueToSearch)){
      $query = "SELECT * FROM `User_Details`";
      $search_result = filterTable($query);
      }
      else{
        // echo "here-3";
        $query = "SELECT * FROM `User_Details` WHERE CONCAT(`First Name`, `Last Name`, `Email Address`, `Home Address`, `Home Phone Number`, `Cell Phone Number`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
      }
    }
    else {
      // echo "here-4";
      $query = "SELECT * FROM `User_Details`";
      $search_result = filterTable($query);
    }
    $rows= mysqli_fetch_all($search_result);
    // print_r($rows);
    ?>
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
      </tbody>
      <!-- <tfoot>
        <tr>
          <th>Name
          </th>
          <th>Email Address
          </th>
          <th>Home Address
          </th>
          <th>Phone Number
          </th>
        </tr>
      </tfoot> -->
    </table>

    <script> 

            $(document).ready(function() { 

                $("#gfg").on("keyup", function() { 

                    var value = $(this).val().toLowerCase(); 

                    $("#geeks tr").filter(function() { 

                        $(this).toggle($(this).text() 

                        .toLowerCase().indexOf(value) > -1) 

                    }); 

                }); 

            }); 

        </script> 
    
</body>
</html>