<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Extern.css">
    <title>Student</title>
  </head>
  <body>
    <div class="container">
      <hr><h1>Register</h1><hr>
      <form method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-xs-6 col-sm-4 col-lg-2">
            <label for="sid" class="label-font">Student ID:</label>
            <input type="text" class="form-control" name="stdid" placeholder="Enter ID" required="required" maxlength="3"/>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="fname" class="label-font">First Name:</label>
            <input type="text" class="form-control" name="stdfname" placeholder="Enter Your First Name" required="required" maxlength="50"/>
          </div>
          <div class="col">
            <label for="lname" class="label-font">Last Name:</label>
          <input type="text" class="form-control" name="stdlname" placeholder="Enter Your Last Name" required="required" maxlength="50"/>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="email" class="label-font">Email :</label>
          <input type="email" class="form-control" name="stdeml" required="required" placeholder="E.g. johndoe@mail.com" maxlength="50"/>
          </div>
          <div class="col">
            <label for="phone" class="label-font">Phone :</label>
            <input type="tel" class="form-control" name="stdphn" required="required" maxlength="10" pattern="[0-9]{10}" placeholder="E.g. 9753086421"/>
          </div>
        </div>
        <div class="form-group">
          <label for="address" class="label-font">Address:</label>
          <textarea class="form-control" rows="5" name="stdadd" required="required" placeholder="Enter Your Address"></textarea>
        </div>
        <div class="row">
            <div class="col">
              <label for="course" class="label-font-rad">Course :</label>
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
          <div class="col">
            <label for="year" class="label-font-rad">Year :</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="year" value="First">
              <label class="form-check-label" for="inRadio1">First</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="year" value="Second">
              <label class="form-check-label" for="inRadio2">Second</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="year" value="Third">
              <label class="form-check-label" for="inRadio3">Third</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="sel1" class="label-font">Semester :</label>
          <select class="form-control" name="stdsem">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select>
          <br>
          <label for="sel2" class="label-font">Subject:</label>
          <select multiple class="form-control" name="stdsub">
            <option>C</option>
            <option>Java</option>
            <option>PHP</option>
            <option>.NET</option>
          </select>
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnsub">Register</button>
        </div>
      </form>
      <br>
      </div>
</body>
</html>  
<?php 
$conn=@mysqli_connect('localhost','root','','registration');
if(isset($_POST['btnsub']))
{
    $id=$_POST['stdid'];
    $name=$_POST['stdfname']." ".$_POST['stdlname'];
    $email=$_POST['stdeml'];
    $phone=$_POST['stdphn'];
    $address=$_POST['stdadd'];
    $cr=$_POST['course'];
    $yr=$_POST['year'];
    $sem=$_POST['stdsem'];
    $sub=$_POST['stdsub'];
    $qry="insert into std values($id,'$name','$email',$phone,'$address','$cr','$yr','$sem','$sub')";
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


