<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<br>

<div class="container">
 <ul class="nav nav-tabs justify-content-center" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#register">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#login">Login</a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="register" class="container tab-pane active">
      <form method="post" enctype="multipart/form-data">
        <hr>
         <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" name="admfname" placeholder="Enter Your First Name" required="required" maxlength="50"/>
        </div>
        <div class="form-group">
          <label for="lname">Last Name:</label>
          <input type="text" class="form-control" name="admlname" placeholder="Enter Your Last Name" required="required" maxlength="50"/>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" name="admeml" required="required" placeholder="E.g. johndoe@mail.com" maxlength="50"/>
        </div>
        <div class="form-group">
          <label for="phone">Phone :</label>
          <input type="tel" class="form-control" name="admphn" required="required" maxlength="10" pattern="[0-9]{10}" placeholder="E.g. 9753086421"/>
        </div>
        <div class="form-group">
          <label for="username">Username :</label>
          <input type="text" class="form-control" placeholder="Enter Username" name="admuname" required="required" maxlength="25"/>
        </div>
        <div class="form-group">
          <label for="pwd">Password :</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="admpwd" required="required" maxlength="16" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,16}$"/>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnreg">Register</button>
    </form>
    </div>
    <div id="login" class="container tab-pane fade"><br>
        <form method="post" enctype="multipart/form-data">
          <hr>
            <div class="form-group">
              <label for="username">Username :</label>
              <input type="text" class="form-control" placeholder="Enter Username" name="unm">
            </div>
            <div class="form-group">
              <label for="pwd">Password :</label>
              <input type="password" class="form-control" placeholder="Enter Password" name="pwd">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="btnlog">Login</button>
          </form>
    </div>
  </div>
</div>

</body>
</html>

<?php 
$conn=mysqli_connect('localhost','root','','registration');
if(isset($_POST['btnreg']))
{
    $fname=$_POST['admfname'];
    $lname=$_POST['admlname'];
    $email=$_POST['admeml'];
    $phone=$_POST['admphn'];
    $username=$_POST['admuname'];
    $password=$_POST['admpwd'];
    $qry="insert into adm values('$fname','$lname','$email',$phone,'$username','$password')";
    if(mysqli_query($conn,$qry))
    {
      echo "<script>alert('Registration Successful!');</script>";
    }
    else
    {
      echo "<script>alert('Registration Failed!');</script>";
    }
}
?>
<?php
{
  if(isset($_POST['btnlog']))
  {
    $uname=$_POST['unm'];
    $passwd=$_POST['pwd'];
    $connect=@mysqli_connect('localhost','root','','registration');
    $query="select * from adm where Username='$uname' and Password='$passwd'";
    $info=mysqli_query($connect,$query);
    $count=mysqli_num_rows($info);
    if($count==null)
    {
      echo "<script>alert('Not Found!');</script>";
    }
    else
      {
        echo "<script>alert('Welcome');</script>";
        header("Location: Info.php");
      }
  }
}
?>

