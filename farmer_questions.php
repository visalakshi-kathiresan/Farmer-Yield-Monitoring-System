<?php include'session.php'; 
$b=$_SESSION["id"];
include 'database.php';
$vi="select*from farmer_reg where user_name='$b'";
  $r=$cc->query($vi);
  if($r->num_rows>0)
  {
    while($row=$r->fetch_assoc())
    { 
      $a=$row['name'];
    }
  }
?>
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
             <a href="acknowledment.php" class="btn btn-primary btn-lg">Home</a>
             <a href="logout.php" class="btn btn-primary btn-lg">logout</a>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">ASK YOUR QUESTION</h3>
            <form action="" method="post" enctype="multipart/form-data" autocomplete="off">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="fname" name="fname"class="form-control form-control-lg"required value="<?php echo $a ; ?>" readonly/>
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
                
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="area" name="area" class="form-control form-control-lg" />
                    <label class="form-label" for="area">Area</label>
                  </div>
                </div>
                   <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="toc" name="toc" class="form-control form-control-lg" />
                      <label class="form-label" for="toc">Type of Crop</label>
                    </div>
                  </div>
                </div>

              <div class="row">
                
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="sc" name="sc" class="form-control form-control-lg" />
                    <label class="form-label" for="sc">Soil Condition</label>
                  </div>
                </div>
                   <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="su" name="su" class="form-control form-control-lg" />
                      <label class="form-label" for="su">Surface</label>
                    </div>
                  </div>
                </div>

              <div class="row">
                
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="doc" name="doc" class="form-control form-control-lg" />
                    <label class="form-label" for="doc">Duration of Crop</label>
                  </div>
                </div>
                   <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="cd" name="cd" class="form-control form-control-lg" />
                      <label class="form-label" for="cd">Current Duration</label>
                    </div>
                  </div>
                </div>

              <div class="row">
                
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="pc" name="pc" class="form-control form-control-lg" />
                    <label class="form-label" for="pc">Previous crop</label>
                  </div>
                </div>
                 <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="pfu" name="pfu" class="form-control form-control-lg" />
                    <label class="form-label" for="pfu">Previous Fertilizer Used</label>
                  </div>
                </div>
                </div>

              <div class="row">
                

                   
                    <div class="form-outline">
                      <input type="text" id="question" name="question" class="form-control form-control-lg" />
                      <label class="form-label" for="question">Your Questions</label><br><br>
                    </div>
                  
                </div>
                  <div class="form-outline">
                    <input type="file" id="img" name="img"class="form-control form-control-lg" onchange="loadFile(event)" />
                    <label class="form-label" for="photo">Picture about question(must be .jpg,.jpeg file)</label>
                    <img id="output" width="200" height="200">
                  </div>
              
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" id='submit' name="submit" value="submit" />
        
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script language="JavaScript">
    var loadFile=function(event)
     {
      var image=document.getElementById('output');
      image.src=URL.createObjectURL(event.target.files[0]);
      var a=image.src;
      f1.t1.value=image.src;
         }
  </script>
</body>
<?php
include 'database.php';
if(isset($_POST['submit']))
{
  $toc=$_POST['toc'];
  $sc=$_POST['sc'];
  $su=$_POST['su'];
  $doc=$_POST['doc'];
  $cd=$_POST['cd'];
  $pc=$_POST['pc'];
  $pfu=$_POST['pfu'];
  $fname=$_POST['fname'];
$fnumber=$_POST['fnumber'];
$area=$_POST['area'];
$question=$_POST['question'];
  $aa=$_FILES['img'];
//  print_r($aa);
  $a=$_FILES['img']['name'];
//  echo "$a";
  $b=$_FILES['img']['tmp_name'];
//  echo "$b";
  $c=$_FILES['img']['size'];
//  echo "$c";
  $d=$_FILES['img']['error'];
  $e=$_FILES['img']['type'];
  $fileExt=explode('.',$a);
  //print_r($fileExt);
  $fileActualExt= strtolower(end($fileExt));
  print_r($fileActualExt);
  $allowed=array('jpg','jpeg','png','pdf');

  if (in_array($fileActualExt,$allowed)) {
    if ($d===0)
     {
      if ($c<100000000)
       {
        $fileNameNew=uniqid('',true).".".$fileActualExt;
        $fileDestination='C:/xampp/htdocs/FARMER/'.$fileNameNew;
        move_uploaded_file($b, $fileDestination);
        $mm=$fileNameNew;
        //echo $mm;
        $in="INSERT INTO `farmer_question`(`sno`, `farmer_name`, `phone_no`, `area`, `type_of_crop`, `soil_conditon`, `surface`, `duration_of_crop`, `current_duration`, `previous_crop`, `previous_fertilizer_used`, `question`, `photo`, `status`) VALUES ('null','$fname','$fnumber','$area','$toc','$sc','$su','$doc','$cd','$pc','$pfu','$question','$mm','PENDING')";
        if($cc->query($in)=="true"){
          ?>
          <script language="JavaScript">
            window.location.href="acknowledment.php";
          </script>
        <?php }
      
      }
      else
      {
        echo "YOUR FILE IS TOO BIG!!!";
      }
    }
    else
    {
      echo "there is a error on your file!";
    }
  }
  else
  {
    echo "you cant upload this type of files";
  }
  
  echo "moved";
}

?>
</html>