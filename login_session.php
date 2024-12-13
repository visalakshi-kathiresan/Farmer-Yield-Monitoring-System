 <?php
    session_start();
    $message='';
    if(count($_POST)>0)
    {
    include'database.php'; 
    //include('connection.php');  
    $username = $_POST['Uname'];  
    $password = $_POST['Pass'];  
      
        //to prevent from mysqli injection  
        //$username = stripcslashes($username);  
        //$password = stripcslashes($password);  
        //$username = mysqli_real_escape_string($cc, $username);  
        //$password = mysqli_real_escape_string($cc, $password);  
      
        $sql = "select *from farmer_reg where user_name = '$username' and password = '$password'";  
        $result = mysqli_query($cc, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
         if(is_array($row))
         {
            $_SESSION["id"] = $row['user_name'];
            $_SESSION["name"] = $row['password'];
            header("location:acknowledment.php");
         } 
        else
        {  
            ?>
            <script language="JavaScript">
               alert("USER ID OR PASSWORD INCORRECT");
            </script> <?php
        } 
        }
        //if(isset($_SESSION['id']))
        //{
          //  header("location:main.php");
        //} 
              
  ?>