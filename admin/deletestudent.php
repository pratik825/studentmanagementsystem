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
<table>
<form action="deletestudent.php" method="post">
    <tr>
       <th>Enter Standard</th>
        <td>
            <input type="number" name="standard" placeholder="enter standard" required="required"/>
        </td>
    
   
        <th>Enter Student name</th>
        <td>
             <input type="text" name="stuname" placeholder="enter student name" required="required"/>
        </td>
    
        <td colspan="2"><input type="submit" name="submit" value="Search">
        </td>
    </tr>
</form>
</table>
   <table align="center" width="80%" border="1" style="margin-top: 10px;">
        <tr style="background-color: #000; color: #fff;">
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Rollno</th>
            <th>Edit</th>
            
        </tr>


        <?php
    if (isset($_POST['submit']))
      {
        include('../connection.php');
        $standard =$_POST['standard'];
        $name =$_POST['stuname'];
        $sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name`LIKE '%$name%'";
        $run =mysqli_query($con,$sql);

        if (mysqli_num_rows($run)<1) 
        {
          echo "<tr><td colspan='5'> no record found </td></tr>";
        }
        else{
           $count=0;

          while ($data=mysqli_fetch_assoc($run))
           {
              $count++;
             ?>
              <tr>
                  <td><?php echo $count; ?></td>
                  <td><img src="../image/<?php echo $data['image'];?>" style="max-width: 100px;"></td>
                  <td><?php echo $data['name']; ?></td>
                  <td><?php echo $data['rollno']; ?></td>
                  <td><a href="deletesform.php?sid=<?php echo $data['id']; ?>"> delete </a></td>
            
        </tr>


             <?php
          }
        }
      }
?>


    
   </table>

