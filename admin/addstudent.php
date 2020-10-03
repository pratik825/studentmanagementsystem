<?php
      include('../connection.php');
      session_start();
  		if (isset($_SESSION['uid']))
  		{
  			echo "";
  		}
  		else

  		{
  			header('location:../login.php');
  		}


?>
<?php
     include ('header.php');
     include ('titlehead.php');

?>
    <form method="post" action="addstudent.php" enctype="multipart/form-data">
      <table align="center" border="1" style="width:70%; margin-top: 40px;">
           <tr>
             <th>ROLL NO.</th>
             <td><input type="text" name="rollno" placeholder="ENTER ROLL NO" required></td>
           </tr>
           <tr>
             <th>FULL NAME</th>
             <td><input type="text" name="fullname" placeholder="ENTER FULL NAME" required></td>
           </tr>
           <tr>
             <th>CITY</th>
             <td><input type="text" name="city" placeholder="ENTER CITY" required></td>
           </tr>
           <tr>
             <th>PARENT CONTACT NO</th>
             <td><input type="number" name="pcon" placeholder="ENTER PARENT CONTACT NO" required></td>
           </tr>
           <tr>
             <th>STANDARD</th>
             <td><input type="number" name="std" placeholder="ENTER STANDARD" required></td>
           </tr>
           <tr>
             <th>IMAGE</th>
             <td><input type="file" name="simg" required></td>
           </tr>
            <tr>
             <td colspan="2"> <input type="submit" name="submit" value="SUBMIT"></td>
           </tr>


      </table>

    </form>

  </body>
  </html>
  <?php
       if (isset($_POST['submit'])) 
       {
         $rollno =$_POST['rollno'];
         $name =$_POST['fullname'];
         $city =$_POST['city']; 
         $pcon =$_POST['pcon'];
         $std =$_POST['std'];
         $imagename=$_FILES['simg']['name'];
         $tempname = $_FILES['simg']['tmp_name'];
           
         $path = '../image/'; 
         $location = $path.$imagename; 
         move_uploaded_file($tempname, $location); 

         $qry1 ="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES ('$rollno','$name','$city' ,'$pcon','$std','$imagename')";
         $run =mysqli_query($con,$qry1);
         
         if ($run==true) 
         {
           ?>
             <script type="text/javascript">
                alert('Data Inserted Successfully');
             </script>
            <?php
          }
        }  
  ?>