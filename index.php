<?php
include("conn.php");

$error="";
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{  
   $count=0;
   $data=mysqli_query($conn,"select * from student_registration where emailid='$_POST[username]' && password='$_POST[password]'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   
   if($count==0)
   {
      $error= "Invalid username or password";
   }
   
else 
    
    
{
        if($row["type"]=="admin")
         {
          header("Location:admindas.php"); 
         }
       else{
           $_SESSION["sname"]=$row["name"];
           $_SESSION["semail"]=$row["emailid"];
           $_SESSION["sgender"]=$row["gender"];
           header("Location:sdb.php");
           }
}
   
}

 
?>

<!DOCTYPE html>
<html>

<head><title>HOME PAGE</title></head>
    
<style>
body{
  background: url(bg.jpg);
}
  .box{
    width:74%;
    height:160px;
	
    
    background-image: url("logo.png");
    background-size: cover;
    margin-left: 13%;
    opacity: .9;
    
  }
  .boxtwo{

    background-image: url("boo.jfif");
    
    background-size: cover;
    box-shadow:6px 6px 5px green;
    border-radius:12px;
  }

.five{
  padding:10px 0px 10px 10px;
  margin-top: 30px;
  margin-left: 55%;
  border-radius:12px;
  margin-right: 5%;
  box-shadow:0px 0px 15px lightgreen;
  font-size:25px;

}
   .five input[type="submit"]
          {

		    font-size:22px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:90% ;
            margin-top: 20px;
			background:#660000;
			color:#FFFFFF;
			border-radius:18px;
			}


</style>





<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%" >
      <tr>
        <td style="color:#33ff33"><h1 align="center"><marquee><u>Welcome To KIIT Library </u></marquee></td></h1>
      </tr>
      <tr>
       
    </table>
  </div>
    <br>
    <br>

    <form method="post" action="">
      <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:73.5%; height:360px; margin-left:13%;margin-top:15px;background-color:white">

        <fieldset align="center" style="  background:rgba(0,0,0,0.38);color:blue;" class="five" class="one">
          <div class="boxfour">
            <h3 style="color:white;text-align:center;;padding-top:1px;padding-bottom: 1px;background:#660000;border-radius:12px;margin-top:-13px;margin-left:-12px;height:40px">Please Login Here</h3>


          </div>

        <table style="font-size:16pt;width:300px;height:50px;margin-right:85px;" align="Right">
          <tr>
            <td><br></td>
          </tr>
          <tr>
            <td><label style="color:white">Username:</label></td>
            <td><input type="text" name="username" placeholder="username"  style="color:red"></td>
          </tr>

          <tr>
            <td><label style="color:white">Password:</label></td>
            <td><input type="password" name="password" placeholder="**********"  style="color:red"></td>
          </tr>
          <tr>
            <td align="center" style="margin-left:200px"><input type="submit" name="submit" value="LOGIN"></td>
          </tr>
          <p style="color:red;font-weight:bold;font-size:17px;text-align:center;background:rgba(255, 255, 255, 0.8)"><?php echo $error ?>
          </p>
          <tr>
            <td style="font-size:10pt">If not register yet..!!!</td>


            <td style="font-size:20pt"><a href="registration.php" style="color:white">Register Now</a></td>
          </tr>
          <tr>
            <td ><br></td>
            <td><br></td>
          </tr>
        </table>
      </fieldset>
      </div >
    </form>


    <div class="boxthree" style="background-color:#66ff66; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
      <marquee><h2 style="line-height:1px;"> Nothing is pleasanter than exploring a library..</h6></marquee>


    </div>
