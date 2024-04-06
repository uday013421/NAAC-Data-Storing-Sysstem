<?php
include 'partials/_dt.php';

?>
<?php
 $result = mysqli_query( $conn,"SELECT * FROM admin ORDER by id DESC");
            
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="f1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav>

        <h1>RAJENDRA MANE COLLEGE OF ENGG & TECH.XYZ</h1>
        <div class="line"></div>
        <div class="lines">
            <div class="ok">
                <i class="fa-solid fa-clock-rotate-left" style="color: #0c0d0d;"></i>
                <h4>Working Time:
                    <ac>Monday-Saturday: 9:15-05:15 Hrs</ac>

                </h4>
            </div>
            <div class="og">
                <i class="fa-solid fa-location-dot" style="color: #0f0f10;"></i>
                <h4>ADDRESS:
                    <ac>At & Post Ambav, Devrukh, Dist Ratnagiri State: Maharashtra,415804</ac>

                </h4>
            </div>
            <div class="ij">
                <i class="fa-solid fa-envelope" style="color: #0f0f10;"></i>
                <h4>Email:
                    <ac>INFO@RMCET.COM</ac>
                </h4>
            </div>

            <div class="logo">
                <img src="img/logo rmcet.png">
            </div>
        </div>
        <h3>FACULTY ACHIVEMENTS</h3>


    </nav>
    <div class="nav1">
        <a href="http://127.0.0.1:5501/home.html">Home</a>
        <a href="http://127.0.0.1:5501/News%20(1).html">News</a>
        <a href="http://localhost/Reg_page/dep.php">Department</a>
        <a href="http://localhost/Reg_page/facu.php">Faculty</a>
        <a href="http://localhost/Reg_page/student%20achi.php">Student</a>
            <div class="nav2">
                
                <div class="search">
                    <input type="search" id="03" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" placeholder="Search">
                </div>
                <i class="fa-solid fa-magnifying-glass" style="margin-top: -35px; display: block; font-size: 25px;"></i>
            </div>
    </div>
    <div class="con">
        <div class="bd">
            <table bgcolor="black" width="100%">
                <thead>
                <tr bgcolor="#00B4D8">
                    <!-- <th width="50">Sr.no</th> -->
                    <th width="200">Name</th>
                    <th width="100">Faculty-Id</th>
                    <th width="100">Event</th>
                    <th width="100">Date</th>
                    <th width="100">Document</th>
                
                </tr>
            </thead>
            <tbody>
             <?php
                 while($res=mysqli_fetch_array($result)){
                    
                      
            echo '<tr bgcolor="#90E0EF" align="center">';
            // echo '<td>'.$res['id'].'</td>';
            echo'<td>'.$res['Name'].'</td>';
            echo'<td>'.$res['Depart'].'</td>';            //   <td> </td>
            echo'<td>'.$res['Ename'].'</td>';  
            echo'<td>'.$res['EDate'].'</td>';
            echo'<td>'.$res['certificate'].'</td>';          //   <td> </td>
            echo '</tr>';
         
             

                 }
                 
                ?>
         
            </tbody>

        
        </table>
        </div>
    </div>
</body>

</html>