<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dt.php';
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $class = $_POST["class"];
    $Depart = $_POST["Depart"];
    $Reg_no = $_POST["Reg_no"];
    $Yer_join= $_POST["Yer_join"];
    $Mobile = $_POST["Mobile"];
    $exists=false;
    if($exists==false){
           $sql = "INSERT INTO `reg_table` (`Name`, `Email`, `class`, `Depart`, `Reg_no`, `Yer_join`, `Mobile`) VALUES ('$Name', '$Email', '$class', '$Depart', '$Reg_no', '$Yer_join', '$Mobile')";
           $result =  mysqli_query($conn, $sql);
           if($result){        
            echo "<script> alert('submitted successfully');{document.location.href='http://127.0.0.1:5500/main/up.html'};</script>";
            }
            else{
                echo"<script> alert('not submitted');{document.location.href='contact/contact.php'};</script>";
            }
    }
}
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="hello.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav>

        <h1>RAJENDRA MANE COLLEGE OF ENGG & TECH.XYZ</h1>
        <div class="line"></div>
        <div class="lines">
            <div class="1">
                <i class="fa-solid fa-clock-rotate-left" style="color: #0c0d0d;"></i>
                <h4>Working Time:
                    <ac>Monday-Saturday: 9:15-05:15 Hrs</ac>

                </h4>
            </div>
            <div class="2">
                <i class="fa-solid fa-location-dot" style="color: #0f0f10;"></i>
                <h4>ADDRESS:
                    <ac>At & Post Ambav, Devrukh, Dist Ratnagiri State: Maharashtra,415804</ac>

                </h4>
            </div>
            <div class="3">
                <i class="fa-solid fa-envelope" style="color: #0f0f10;"></i>
                <h4>Email:
                    <ac>INFO@RMCET.COM</ac>
                </h4>
            </div>

            <div class="logo">
                <img src="img/logo rmcet.png" style="margin-left: 1200px;">
            </div>
        </div>
        <h3>ACHIVEMENTS</h3>


    </nav>
  
    

        <div class="head" style="font-size:30px;">
            Regsitration From
        </div>

    </div>
    <div class="box">
        <form action="hello.php" method="Post">
        
            <div class="name">
                Student Name:
                <input type="text" id="Name" name="Name">
            </div>

            <div class="email">
                Email Id:
                <input type="email"  id="Email" name="Email">
            </div>

            <div class="class">
                Class:
                <input type="text" required id="class" name="class">
            </div>
            
            
        

          
            <label for="dep" class="drop">Department:</label>
            <select name="Depart">
              <option value="Computer">Computer</option>
              <option value="Mechanicla">Mechanical</option>
              <option value="Electrical">Electrical</option>
              <option value="Automobile">Automobile</option>
            </select>
            <br><br>
            
           
         

          <div class="reg">
            Regsitration No.:
            <input type="text" required id="Reg_no" name="Reg_no">
        </div>
        
        
        <div class="join">
            Year of joining:
            <input type="text" required id="Yer_join" name="Yer_join">
        </div>
        <div class="no">
            Phone No.:
            <input type="text" required id="Mobile" name="Mobile">
        </div>
<div class="bt">
 <a href="http://127.0.0.1:5501/home.html"><button type="submit" name="save_select">Submit</button></a>
</div>
</form>
    </div>
</body>

</html>