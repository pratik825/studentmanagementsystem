<?php

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

?>


	<div class="admintitle" align="center">
     
    <h4>
     	<a href="logout.php" style="float: right; margin-right: 30px; color: white;">LOGOUT</a></h4> 
     <h1>WELCOME TO ADMIN DASHBOARD</h1>
    </div>

       <div class="dashboard">
       	   <table border="1" style="width: 50%;" align="center">
       	   	       <tr>
       	   	       	   <td>1.</td><td><a href="addstudent.php">Insert student detail</a></td>
       	   	       </tr>
       	   	       <tr>
       	   	       	   <td>2.</td><td><a href="updatestudent.php">Update student detail</a></td>
       	   	       </tr>
       	   	       <tr>
       	   	       	   <td>3.</td><td><a href="deletestudent.php">Delete student detail</a></td>
       	   	       </tr>

       	   	       </tr>
       	   </table>
       </div>

</body>
</html>