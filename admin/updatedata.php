<?php
    include ('../connection.php');


        $rollno =$_POST['rollno'];
         $name =$_POST['fullname'];
         $city =$_POST['city']; 
         $pcon =$_POST['pcon'];
         $std =$_POST['std'];
         $id=$_POST['sid'];
         $imagename=$_FILES['simg']['name'];
         $tempname = $_FILES['simg']['tmp_name'];
           
         $path = '../image/'; 
         $location = $path.$imagename; 
         move_uploaded_file($tempname, $location); 

         $qry2 ="UPDATE `student` SET `rollno`='$rollno',`name`='$name',`city`='$city',`pcont`='$pcon',`standard`='$std',`image`='$imagename' WHERE `id`='$id'";
         $run =mysqli_query($con,$qry2);
         
         if ($run==true) 
         {
           ?>
             <script type="text/javascript">
                alert('Data updated Successfully');
                window.open('updateform.php?sid=$id<?php echo $id;?>','_self'); 
             </script>
            <?php
          }





?>