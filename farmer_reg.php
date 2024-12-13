<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</head>
<body>
   <style>

        .gradient-custom {
/* fallback for old browsers */

  background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(229, 23, 80), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(229, 23, 80), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
.vh-10
{
  height: inherit;
}
.form-label{

  font-weight: bold;
}
    </style>
    <div class="header">
 </div>
<section class="vh-10 gradient-custom">
  
  <div class="container py-5 h-inherit">

    <div class="row justify-content-center align-items-center h-inherit">

      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">
            Farmer Registration Form</h3>
            <form action="" method="post" autocomplete="off">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="fname" name="fname"class="form-control form-control-lg"required />
                    <label class="form-label" for="fName">Farmer Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="fnumber" name="fnumber" class="form-control form-control-lg"required />
                    <label class="form-label" for="fnumber">Phone_no</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="anumber"  name="anumber"required/>
                    <label for="anumber" class="form-label" >Aadhar_number</label>

                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="area" name="area" class="form-control form-control-lg" required />
                    <label class="form-label" for="area">Area</label>
                  </div>

                </div>
              </div>
                  <div class="form-outline">
                    <input type="text" id="uname" name="uname" class="form-control form-control-lg" required />
                    <label class="form-label" for="uname">User_Name</label>
                  </div>
                  <div class="form-outline">
                    <input type="password" id="pass" name="pass"class="form-control form-control-lg" required minlength="8" maxlength="12" />
                    <label class="form-label" for="sadd">Password</label>
                  </div>            
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" id='submit' name="submit" value="submit" />
                <a href="index.php" class="btn btn-primary btn-lg">Home</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<?php

if(isset($_POST['submit']))
{
$a=$_POST['fname'];
$b=$_POST['fnumber'];
$c=$_POST['anumber'];
$d=$_POST['area'];
$e=$_POST['uname'];
$f=$_POST['pass'];
$sql="INSERT INTO `farmer_reg`(`Sno`, `name`, `mobile_no`, `aadhar_no`, `area`, `user_name`, `password`) VALUES ('null','$a','$b','$c','$d','$e','$f')";
include 'database.php';
$result=mysqli_query($cc,$sql);
if($result==true)
{
    ?>
    <script language="javascript">
alert("Registered");
    </script>
    <?php

}
else
{
echo"error";

}
}

?>
</html> 