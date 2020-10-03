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
     include ('../connection.php');

     $sid = $_GET ['sid'];
     $sql ="SELECT * FROM `student` WHERE `id`='$sid'";
     $run =mysqli_query($con,$sql);

     $data= mysqli_fetch_assoc($run);

?>
    <form method="post" action="updatedata.php" enctype="multipart/form-data">
      <table align="center" border="1" style="width:70%; margin-top: 40px;">
           <tr>
             <th>ROLL NO.</th>
             <td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>" placeholder="ENTER ROLL NO" required></td>
           </tr>
           <tr>
             <th>FULL NAME</th>
             <td><input type="text" name="fullname" value="<?php echo $data['name'];?>"  placeholder="ENTER FULL NAME" required></td>
           </tr>
           <tr>
             <th>CITY</th>
             <td><input type="text" name="city" value="<?php echo $data['city'];?>"  placeholder="ENTER CITY" required></td>
           </tr>
           <tr>
             <th>PARENT CONTACT NO</th>
             <td><input type="number" name="pcon" value="<?php echo $data['pcont'];?>"  placeholder="ENTER PARENT CONTACT NO" required></td>
           </tr>
           <tr>
             <th>STANDARD</th>
             <td><input type="number" name="std" value="<?php echo $data['standard']; ?>"  placeholder="ENTER STANDARD" required></td>
           </tr>
           <tr>
             <th>IMAGE</th>
             <td><input type="file" name="simg" required></td>
           </tr>
            <tr>
             <td colspan="2" align="center"> 
              <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>

              <input type="submit" name="submit" value="SUBMIT"></td>
           </tr>


      </table>

    </form>

  </body>
  </html>