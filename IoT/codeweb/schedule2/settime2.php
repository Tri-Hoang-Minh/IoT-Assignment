<?php
 include('kiemtradangnhap.php'); 
include "../language/config.php";
       include "../login/connection.php";
$con = $conn;      
   


    $query ="SELECT * from id5";                    // Select all data in table "status"
    $result = $con->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $id1=$row["id1"];
    $id2=$row["id2"];
    $id3=$row["id3"];
    $id4=$row["id4"];
    $id5=$row["id5"];

};

if (isset($_POST['submit1'])) {
$sql = "DELETE FROM schedule5 WHERE id=$id1 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit2'])) {
$sql = "DELETE FROM schedule5 WHERE id=$id2 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit3'])) {
$sql = "DELETE FROM schedule5 WHERE id=$id3 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit4'])) {
$sql = "DELETE FROM schedule5 WHERE id=$id4 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit5'])) {
$sql = "DELETE FROM schedule5 WHERE id=$id5 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};


        /////////////////

        $query ="SELECT * from id6";                    // Select all data in table "status"
    $result = $con->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $id1=$row["id1"];
    $id2=$row["id2"];
    $id3=$row["id3"];
    $id4=$row["id4"];
    $id5=$row["id5"];

};

if (isset($_POST['submit6'])) {
$sql = "DELETE FROM schedule6 WHERE id=$id1 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit7'])) {
$sql = "DELETE FROM schedule6 WHERE id=$id2 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit8'])) {
$sql = "DELETE FROM schedule6 WHERE id=$id3 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit9'])) {
$sql = "DELETE FROM schedule6 WHERE id=$id4 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit10'])) {
$sql = "DELETE FROM schedule6 WHERE id=$id5 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

        //////////////////
  $query ="SELECT * from id7";                    // Select all data in table "status"
    $result = $con->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $id1=$row["id1"];
    $id2=$row["id2"];
    $id3=$row["id3"];
    $id4=$row["id4"];
    $id5=$row["id5"];

};

if (isset($_POST['submit11'])) {
$sql = "DELETE FROM schedule7 WHERE id=$id1 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit12'])) {
$sql = "DELETE FROM schedule7 WHERE id=$id2 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit13'])) {
$sql = "DELETE FROM schedule7 WHERE id=$id3 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit14'])) {
$sql = "DELETE FROM schedule7 WHERE id=$id4 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit15'])) {
$sql = "DELETE FROM schedule7 WHERE id=$id5 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

        //////////////////
          $query ="SELECT * from id8";                    // Select all data in table "status"
    $result = $con->query($query);
    
        while($row = $result->fetch_assoc()) 
        {   $id1=$row["id1"];
    $id2=$row["id2"];
    $id3=$row["id3"];
    $id4=$row["id4"];
    $id5=$row["id5"];


};

if (isset($_POST['submit16'])) {
$sql = "DELETE FROM schedule8 WHERE id=$id1 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit17'])) {
$sql = "DELETE FROM schedule8 WHERE id=$id2 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit18'])) {
$sql = "DELETE FROM schedule8 WHERE id=$id3 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit19'])) {
$sql = "DELETE FROM schedule8 WHERE id=$id4 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

if (isset($_POST['submit20'])) {
$sql = "DELETE FROM schedule8 WHERE id=$id5 "; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};

        //////////////////
     





if(isset($_POST['start1']))   // If press OFF
{  $d0=$_POST["start1"];
 $d1=$_POST["stop1"];
  
  
$sql = "INSERT schedule5 (date_start,date_stop) VALUES ('".$d0."','".$d1."')"; 

        if ($con->query($sql) === TRUE) {
           
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};


if(isset($_POST['start2']))   // If press OFF
{  $d0=$_POST["start2"];
 $d1=$_POST["stop2"];
  
  
$sql = "INSERT schedule6 (date_start,date_stop) VALUES ('".$d0."','".$d1."')"; 

        if ($con->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};



        if(isset($_POST['start3']))   // If press OFF
{  $d0=$_POST["start3"];
 $d1=$_POST["stop3"];
  
  
$sql = "INSERT schedule7 (date_start,date_stop) VALUES ('".$d0."','".$d1."')"; 

        if ($con->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};


if(isset($_POST['start4']))   // If press OFF
{  $d0=$_POST["start4"];
 $d1=$_POST["stop4"];
  
  
$sql = "INSERT schedule8 (date_start,date_stop) VALUES ('".$d0."','".$d1."')"; 

        if ($con->query($sql) === TRUE) {
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }};










   





   
        ?>             
                       




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title><?php   echo $lang1['vuon2']?></title>
    <!-- Favicon -->
    <link rel="icon" href="http://icons.iconarchive.com/icons/bokehlicia/captiva/128/rocket-icon.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="../base/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../base/css/custom.css" rel="stylesheet">
    <link href="../base/css/guages.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet">
    
    <!-- Slider -->
    <link href="../base/css/slider/freshslider.min.css" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  

    <script src="../base/js/jquery.js"></script>
       <script src="../base/js/guage/raphael-2.1.4.min.js"></script>
    <script src="base/js/guage/justgage-1.1.0.min.js"></script>
    <!-- Menu Toggle Script -->
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
    <!-- Chart js library -->
    <script src="base/js/chart/Chart.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- Slider -->
    <script src="../base/js/slider/freshslider.min.js"></script>   


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 

</head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    
                   
                </button>
                <a class="navbar-brand pull-left " href="#" id="menu-toggle"><span class="glyphicon glyphicon-chevron-left soft-white"></span></a>
                <a class="navbar-brand pull-left" id='space' href="#"><?php   echo $lang1['vuon2']?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li ><a href="../template1.php"><?php   echo $lang1['vuon1']?></a></li>
                <li class="active"><a href="../template2.php"><?php   echo $lang1['vuon2']?></a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php   echo $lang1['admin']?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="../login/dangxuat.php"><?php   echo $lang2['logout']?></a></li>
                    
                  </ul>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="user-panel">
            <div class="image pull-left">
                <a href=""><img src="../image/logobk.jpg" class="img-circle" alt="User Image"></a>
            </div>
            <div class="slogan pull-right">
                <h3 class="pull-right"><?php   echo $lang1['hethong']?> </h3>
                <br>
                <h5 class="pull-right"><?php   echo $lang1['giamsattructuyen']?></h5>
            </div>
        </div>

        
         <ul class="sidebar-nav">
            <li>
                <h3><?php   echo $lang1['thaotac']?></h3>
            </li>
            <li >

                <a   href="../template2.php"><span class="fas fa-sync" style="color: yellow"></span>&nbsp; <?php   echo $lang1['dieukhienthietbi']?></a>
            </li>
            
            <li>
                <h3><?php   echo $lang1['thongsomoitruong']?></h3>
            </li>
            <li >
                <a href="../garden2/temp/in_temp.php" ><span class="fas fa-temperature-low" style="color: orange ;font-size:15px;"></span>&nbsp; <?php   echo $lang1['nhietdo']?></a>
            </li>
            <li >
                <a href="../garden2/humidity/in_temp.php"><span class="fas fa-cloud-sun-rain" style="color: blue;font-size: 15px;"></span>&nbsp; <?php   echo $lang1['doamkhongkhi']?></a>
            </li>
            <li>
                <a href="../garden2/mois/in_temp.php"><span class="fas fa-water" style="color: #F4A460;font-size: 15px;"></span>&nbsp; <?php   echo $lang1['doamdat']?></a>
            </li>
            <li>
                <a href="../garden2/light/in_temp.php"><span class="fas fa-sun"
                    style="color: yellow;font-size: 15px;"></span>&nbsp; <?php   echo $lang1['cuongdosang']?></a>
            </li>
            <li>
                <h3><?php   echo $lang1['timer']?></h3>
            </li>
            <li id="active">
                <a href="settime2.php"><span class="fas fa-history" style="color:#FFF8DC;font-size:   15px;"></span>&nbsp; <?php   echo $lang1['schedule']?></a>
            </li>
            <br> <br> <br><br>


			<li>
            <a href="#"><span class="far fa-clock" style="color:green;font-size:   15px;"></span>&nbsp;<span id="timer" style="color: White;text-align:center; "></span> </a>
             
            </li>
        </ul>
    </div>

  <hr class="style-four" style="margin-bottom: 10px;margin-top: 0px">
 

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="btn-group pull-right" role="group" aria-label="...">
            <button type="button" class="btn btn-sm btn-default active " id="data"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;<?php   echo $lang8['schedule']?></button>
            <button type="button" class="btn btn-sm btn-default " id="today"><span class="glyphicon glyphicon-record"></span>&nbsp;&nbsp;<?php   echo $lang8['settime']?></button>
        </div>
    </div>
</div>




<div  id="click_today" class="hide"  >
     <div class="spacer"></div>
     <div class="row" >
                <div class="col-xs-12">
                    <table class="table table-hover">
                        <thead >
                            <tr>
                              <th><?php   echo $lang5['tt']?></th>
                              <th><?php   echo $lang3['chucnang']?></th>
                              <th><?php   echo $lang5['t_sta']?></th>
                              <th><?php   echo $lang5['t_sto']?></th>
                              <th><?php   echo $lang5['set']?></th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                            <tr>
                              <td>1</td>
                              <td><?php   echo $lang3['dkden']?></td>
                              <td><form action="settime2.php" method="post">

                              <input type="datetime-local" name="start1"></td>
                              <td><input type="datetime-local" name="stop1"></td>
                              <td><input type="submit" value=<?php   echo $lang5['set']?>></form></td>
                            </tr>
                           <tr>
                              <td>2</td>
                              <td><?php   echo $lang3['dkb']?></td>
                              <td><form action="settime2.php" method="post"><input type="datetime-local" name="start2"></td>
                              <td><input type="datetime-local" name="stop2"></span></td>
                              <td><input type="submit" value=<?php   echo $lang5['set']?>></form></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td><?php   echo $lang3['dkrc']?></td>
                              <td><form action="settime2.php" method="post"><input type="datetime-local" name="start3"></td>
                              <td><input type="datetime-local" name="stop3"></span></td>
                              <td><input type="submit" value=<?php   echo $lang5['set']?>></form></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td><?php   echo $lang3['dkps']?></td>
                              <td><form action="settime2.php" method="post"><input type="datetime-local" name="start4"></td>
                              <td><input type="datetime-local" name="stop4"></td>
                              <td><input type="submit" value=<?php   echo $lang5['set']?>></form></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

</div>



<div  id="click_data" >
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><b><?php   echo $lang8['schedule']?></b></h3>
            </div>
            <div class="box-body">
                <?php
                    
                    
                    $number = 1;
                    echo '<table class="table table-hover table-condensed display" id="example" cellspacing="0" width="100%">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>'. $lang5['tt'].'</th>';
                    echo '<th>'. $lang3['chucnang'].'</th>';
                    echo '<th>'. $lang8['t_sta'].'</th>';
                    echo '<th>'. $lang8['t_sto'].'</th>';
                     echo '<th>'. $lang6['chinh'].'</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody class="searchable">';
                    //////////////////////////////////////////////////////////
                    $query = "SELECT * FROM schedule5";
                    $result = mysqli_query($con, $query);  
                    $dem=1;
                    while($row = mysqli_fetch_assoc($result)):
                         echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo '<td>'. $lang3['dkden'].'</td>';
                        echo "<td>{$row['date_start']}</td>";
                        echo "<td>{$row['date_stop']}</td>";
                        

                                if($dem==1){
                        $id=$row['id'];
                        $sql = "UPDATE id5 SET id1 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                       
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit1' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                       };


                                if($dem==2){
                        $id=$row['id'];
                        $sql = "UPDATE id5 SET id2 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                        
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit2' value={$lang6['delete']}></form></td>";
                        echo "</tr>";};
                      

                                if($dem==3){
                        $id=$row['id'];
                        $sql = "UPDATE id5 SET id3 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                      
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit3' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                      };

                                if($dem==4){
                        $id=$row['id'];
                        $sql = "UPDATE id5 SET id4 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                       
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit4' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                       };

                       if($dem==5){
                        $id=$row['id'];
                        $sql = "UPDATE id5 SET id5 = $id"; 

                        
            if ($con->query($sql) === TRUE) { } ;

                      echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit5' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                        
                        };

                       $dem+=1;
                        $number+=1;

                    endwhile;
/////////////////////////////////////////////////
                     $query = "SELECT * FROM schedule6";
                    $result = mysqli_query($con, $query);  
                    $dem=1;
                    while($row = mysqli_fetch_assoc($result)):
                         echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo '<td>'. $lang3['dkb'].'</td>';
                        echo "<td>{$row['date_start']}</td>";
                        echo "<td>{$row['date_stop']}</td>";
                        

                                if($dem==1){
                        $id=$row['id'];
                        $sql = "UPDATE id6 SET id1 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                       
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit6' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                       };


                                if($dem==2){
                        $id=$row['id'];
                        $sql = "UPDATE id6 SET id2 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                        
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit7' value={$lang6['delete']}></form></td>";
                        echo "</tr>";};
                      

                                if($dem==3){
                        $id=$row['id'];
                        $sql = "UPDATE id6 SET id3 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                      
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit8' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                      };

                                if($dem==4){
                        $id=$row['id'];
                        $sql = "UPDATE id6 SET id4 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                       
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit9' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                       };

                       if($dem==5){
                        $id=$row['id'];
                        $sql = "UPDATE id2 SET id5 = $id"; 

                        
            if ($con->query($sql) === TRUE) { } ;

                      echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit10' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                        
                        };

                       $dem+=1;
                        $number+=1;

                    endwhile;
                    /////////////////////////////////////////////////
                     $query = "SELECT * FROM schedule7";
                    $result = mysqli_query($con, $query);  
                    $dem=1;
                    while($row = mysqli_fetch_assoc($result)):
                         echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo '<td>'. $lang3['dkrc'].'</td>';
                        echo "<td>{$row['date_start']}</td>";
                        echo "<td>{$row['date_stop']}</td>";
                        

                                if($dem==1){
                        $id=$row['id'];
                        $sql = "UPDATE id7 SET id1 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                       
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit11' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                       };


                                if($dem==2){
                        $id=$row['id'];
                        $sql = "UPDATE id7 SET id2 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                        
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit12' value={$lang6['delete']}></form></td>";
                        echo "</tr>";};
                      

                                if($dem==3){
                        $id=$row['id'];
                        $sql = "UPDATE id7 SET id3 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                      
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit13' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                      };

                                if($dem==4){
                        $id=$row['id'];
                        $sql = "UPDATE id7 SET id4 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                       
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit14' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                       };

                       if($dem==5){
                        $id=$row['id'];
                        $sql = "UPDATE id7 SET id5 = $id"; 

                        
            if ($con->query($sql) === TRUE) { } ;

                      echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit15' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                        
                        };

                       $dem+=1;
                        $number+=1;

                    endwhile;
                   

                    /////////////////////////////////////////////////
                     $query = "SELECT * FROM schedule8";
                    $result = mysqli_query($con, $query);  
                    $dem=1;
                    while($row = mysqli_fetch_assoc($result)):
                         echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo '<td>'. $lang3['dkps'].'</td>';
                        echo "<td>{$row['date_start']}</td>";
                        echo "<td>{$row['date_stop']}</td>";

  


                                if($dem==1){
                        $id=$row['id'];
                        $sql = "UPDATE id8 SET id1 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                       
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit16' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                       };


                                if($dem==2){
                        $id=$row['id'];
                        $sql = "UPDATE id8 SET id2 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                        
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit17' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                    	};
                      

                                if($dem==3){
                        $id=$row['id'];
                        $sql = "UPDATE id8 SET id3 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                      
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit18' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                      };

                                if($dem==4){
                        $id=$row['id'];
                        $sql = "UPDATE id8 SET id4 = $id"; 
            if ($con->query($sql) === TRUE) { } ;

                       
                        echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit19' value={$lang6['delete']}></form></td>";
                        echo "</tr>";
                       };

                       if($dem==5){
                        $id=$row['id'];
                        $sql = "UPDATE id8 SET id5 = $id"; 

                        
            if ($con->query($sql) === TRUE) { } ;

                      echo "<td><form action='settime2.php' method='post'>
                            <input type='submit' name='submit20' value={$lang6['delete']}></form></td>";
                        echo "</tr>";

                        
                        };
 					
                       $dem+=1;
                        $number+=1;
                    
                    endwhile;

                    ////////////////////////////////////////
                   
                ?>
            </div>
        </div>
    </div>
</div>

</div>

<script type="text/javascript">
 
    
    $('#today').click(function(){
        $('#click_data').addClass('hide');
        $('#click_today').removeClass('hide');
        $('#data').removeClass('active');
        $('#today').addClass('active');
    });
    
   $('#data').click(function(){
        $('#click_data').removeClass('hide');
        $('#click_today').addClass('hide');
       
        $('#data').addClass('active');
        $('#today').removeClass('active');
        
    
    });
    
        


</script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>



<script src="../jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},1000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "checktime.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#timer").html(data);
                        }
                    });
                }
            });
        </script>


        <script>
            $(document).ready(function() {
                setInterval(function(){get_data()},1000);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "../schedule/checktime.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#timer").html(data);
                        }
                    });
                }
            });
        </script>

       
</body>
</html>
