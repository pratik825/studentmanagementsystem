<!DOCTYPE html>
<html>
<head>
	<title> STUDENT MANGEMENT SYSTEM </title>
</head>
<body>
     
    <h5 align="right" style="margin-right: 20px;"><a href="login.php">Admin Login </a></h5>
    <h1 align="center">Welcome to Student Management System </h1>
        <table style="width: 50%;" align="center" border="1">
     	    <tr>
     	  	        <td colspan="2" allign="center"> Student Information</td>
     	    </tr>
            <tr>
          	        <td allign="left">Choose Standard</td>
          	    <td>
          	   	    <select name="std">
          	   	   	    <option value="1">1st</option>
          	   	   	    <option value="2">2nd</option>
          	   	   	    <option value="3">3rd</option>
          	   	   	    <option value="4">4th</option>
          	   	   	    <option value="5">5th</option>
          	   	   	    <option value="6">6th</option>
          	   	    </select>	    
          	    </td>
            </tr>
            <tr>
        	    <td>Enter Rollno</td>
        	    <td> <input type="text"name="rollno" required> </td>
            </tr>
            <tr>
        	    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
            </tr>
        </table>
</body>
</html>