<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" type="text/css" href="Cascade.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <form method="post" enctype="multipart/form-data">
<div class="container">
        <div class="main">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Student's Name" name="srcname">
                <div class="input-group-append">
                    <button class="btn btn-outline-light" type="submit" name="btnname">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
          </div>
             </div>
            <hr>
            <div class="divide">
              <h4 class="head4">Select Course</h4><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="course" value="B.C.C.A.">
                <label class="form-check-label" for="Radioin1">B.C.C.A.</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="course" value="B.Sc.">
                <label class="form-check-label" for="Radioin2">B.Sc.</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="course" value="B.C.A.">
                <label class="form-check-label" for="Radioin3">B.C.A.</label>
              </div>
              </div>
                <div class="btnshowcr">
                <button type="submit" name="btncr" class="btn btn-secondary">Show</button>
              </div>
              <hr>
              <div class="halve">
                <h4 class="head4">Select Semester</h4><br>
                <select class="form-control" name="stdsem">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
              <div class="btnshowcr">
                <button type="submit" name="btnsem" class="btn btn-secondary">Show</button>
              </div>
              <hr>
                <div class="btn-show">
                  <button type="submit" name="btnshow" class="btn btn-info btn-lg">Show All Records</button>
                </div>
                <hr>
</div>
</form>
</body>
</html>				                            
<?php
if(isset($_POST['btnname']))
{
$name=$_POST["srcname"];
$con=@mysqli_connect('localhost','root','','registration');
$sql="select * from std where Name='$name';";
$data=mysqli_query($con,$sql);
$count=mysqli_num_rows($data);
if($count==null)
{
  echo "<script>alert('Not Found!');</script>";
    
}
else
{
    echo "<table class='tab'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Course</th><th>Year</th><th>Semester</th><th>Subject</th>";
    while($rs=mysqli_fetch_assoc($data))
    {
        echo "<tr>";
        echo "<td>".$rs['ID']."</td>";
        echo "<td>".$rs['Name']."</td>";
        echo "<td>".$rs['Email']."</td>";
        echo "<td>".$rs['Phone']."</td>";
        echo "<td>".$rs['Address']."</td>";
        echo "<td>".$rs['Course']."</td>";
        echo "<td>".$rs['Year']."</td>";
        echo "<td>".$rs['Semester']."</td>";
        echo "<td>".$rs['Subject']."</td>";
        echo "</tr>";
    } 
      echo "</table>";
}
}
if(isset($_POST['btncr']))
    {
    $cr=$_POST["course"];
    $con=@mysqli_connect('localhost','root','','registration');
    $sql="select * from std where Course='$cr';";
    $data=mysqli_query($con,$sql);
    $count=mysqli_num_rows($data);
if($count==null)
    {
      echo "<script>alert('Not Found!');</script>";
        
    }
    else
    {
      echo "<table class='tab'>";
      echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Course</th><th>Year</th><th>Semester</th><th>Subject</th>";
      while($rs=mysqli_fetch_assoc($data))  
      {
            echo "<tr>";
            echo "<td>".$rs['ID']."</td>";
            echo "<td>".$rs['Name']."</td>";
            echo "<td>".$rs['Email']."</td>";
            echo "<td>".$rs['Phone']."</td>";
            echo "<td>".$rs['Address']."</td>";
            echo "<td>".$rs['Course']."</td>";
            echo "<td>".$rs['Year']."</td>";
            echo "<td>".$rs['Semester']."</td>";
            echo "<td>".$rs['Subject']."</td>";
            echo "</tr>";
          } 
          echo "</table>";
    }
}

        if(isset($_POST['btnsem']))
        {
        $sem=$_POST["stdsem"];
        $con=@mysqli_connect('localhost','root','','registration');
        $sql="select * from std where Semester='$sem';";
        $data=mysqli_query($con,$sql);
        $count=mysqli_num_rows($data);
        if($count==null)
{
  echo "<script>alert('Not Found!');</script>";
    
}
else
{
  echo "<table class='tab'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Course</th><th>Year</th><th>Semester</th><th>Subject</th>";
    while($rs=mysqli_fetch_assoc($data))
    {
        echo "<tr>";
        echo "<td>".$rs['ID']."</td>";
        echo "<td>".$rs['Name']."</td>";
        echo "<td>".$rs['Email']."</td>";
        echo "<td>".$rs['Phone']."</td>";
        echo "<td>".$rs['Address']."</td>";
        echo "<td>".$rs['Course']."</td>";
        echo "<td>".$rs['Year']."</td>";
        echo "<td>".$rs['Semester']."</td>";
        echo "<td>".$rs['Subject']."</td>";
        echo "</tr>";
      } 
      echo "</table>";
}
}
if(isset($_POST['btnshow']))
{

$con=@mysqli_connect('localhost','root','','registration');
$sql="select * from std;";
$data=mysqli_query($con,$sql);
$count=mysqli_num_rows($data);
if($count==null)
{
  echo "<script>alert('Not Found!');</script>";
    
}
else
{
  echo "<table class='tab'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Course</th><th>Year</th><th>Semester</th><th>Subject</th>";
    while($rs=mysqli_fetch_assoc($data))
    {
        echo "<tr>";
        echo "<td>".$rs['ID']."</td>";
        echo "<td>".$rs['Name']."</td>";
        echo "<td>".$rs['Email']."</td>";
        echo "<td>".$rs['Phone']."</td>";
        echo "<td>".$rs['Address']."</td>";
        echo "<td>".$rs['Course']."</td>";
        echo "<td>".$rs['Year']."</td>";
        echo "<td>".$rs['Semester']."</td>";
        echo "<td>".$rs['Subject']."</td>";
        echo "</tr>";
      } 
      echo "</table>";
}
}
?>


