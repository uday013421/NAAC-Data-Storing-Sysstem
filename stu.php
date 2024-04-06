
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partial/_dt.php';
    $Email = $_POST["Email"];
    $Name = $_POST["Name"];
    $Dep = $_POST["Dep"];
    $Ename = $_POST["Ename"];
    $Depart = $_POST["Depart"];
    $pran = $_POST["pran"];
    $Devent = $_POST["Devent"];
    $Rank = $_POST["Rank"];
    $file = $_POST["file"];
    $Desp = $_POST["Desp"];
  
    $exists=false;
    if( $exists==false){
           $sql = "INSERT INTO `stu` (`Email`, `Name`, `Department`, `Ename`, `Elevel`, `Eloc`, `EDate`, `Rank`,`certificate`) VALUES ('$Email', '$Name', '$Dep', '$Ename', '$Depart', '$pran', '$Devent', '$Rank',' $file')";
           $result =  mysqli_query($conn, $sql);
        if($result){        
        echo "<script> alert('submitted successfully');{document.location.href=''};</script>";
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
    <link rel="stylesheet" href="reg2.css">
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
                <img src="img/logo rmcet1.png">
            </div>
        </div>
        <h3>ACHIVEMENTS</h3>


    </nav>
 
    <div class="con">
        <h1>STUDENT ACHIEVEMENTS FORM</h1>
 
       <p>Faculty Details:</p>
       <div class="inp">
      <div class="lable">
        <form action="stu.php" method="Post">
        <label for="Email" style="margin-left: 50px;">Email</label>
        <label for="Email" style="margin-left: 203px;">Name</label>
        <label for="Email" style="margin-left: 190px;">Department</label>
        <!-- <label for="Email" style="margin-left: 160px;">Year</label> -->
        </div>
       <input type="text" id="Email" name="Email">
       <input type="text" id="Name" name="Name">
       <input type="text" id="Dep" name="Dep">
       <!-- <input type="text" style="width: 100px;"> -->
        </div>
        <div class="ED">
            <p>Event Details:</p>
            <div class="fy">
            <div class="ename">
                <label for="name">Event Name</label><br>
                <input type="text" id="Ename" name="Ename">
            </div>
            <div class="elevel">
                <label for="dep" class="drop" style="font-size: medium;">Event level</label>
                <select name="Depart" id="Depart">
                    <option value="">Event level</option>
                  <option value="National Level">National Level</option>
                  <option value="State Level">State Level</option>
                  <option value="District Level">District Level</option>
                  <option value="Taluka Level">Taluka Level</option>
                  <option value="Inter College Level">Inter College Level</option>
                </select>
                <br><br>
            </div>

            <div class="loc">
                <label for="name">Event Location</label><br>
                <input type="text" id="pran" name="pran">
            </div>

            <div class="date">
                <label for="name">Date of event</label><br>
                <input type="text" id="Devent" name="Devent">
            </div>
        </div>

        <div class="sy">
           
            <div class="elevel">
                <label for="dep" class="drop" style="font-size: medium;">Rank Secured</label>
                <select name="Rank" id="Rank">
                  <option value="Winner">Winner</option>
                  <option value="Runner Up">Runner Up</option>
                  <option value="Second Runner Up">Second Runner Up</option>
                  <option value="Consolation">Consolation</option>
                  <option value="Participate">Participate</option>
                </select>
                <br><br>
            </div>

            <div class="cert">
                <label for="name">Certificate</label><br>
                <input type="file" id="file" name="file">
            </div>

            <div class="desc">
                <label for="name">Description</label><br>
                <input type="text" id="Desp" name="Desp">
            </div>
            
        </div>
       

            
        </div>
        <div class="sub" style="margin-top: 100px; margin-left: 45%; ">
            <button type="submit" name="btn" id="btn" style="width: 100px; height: 50px; font-size: medium; font-family: Arial, Helvetica, sans-serif;color: aliceblue;background-color: #00B4D8; border-radius: 10px;"><a href="http://127.0.0.1:5501/home.html" style="text-decoration:none;color:white;">Upload</a></button>
          </div>
    </form>
      </div>
      
      
      
       
     
    
    </div>
</body>

</html>