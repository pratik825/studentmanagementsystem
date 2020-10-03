<?php
    include ('../connection.php');

        $id =$_REQUEST['sid'];


        $qry3="DELETE FROM `student` WHERE `id`='$id'";
         $run =mysqli_query($con,$qry3);
         
         if ($run==true) 
         {
           ?>
             <script type="text/javascript">
                alert('Data delete Successfully');
                window.open('deletestudent.php','_self'); 
             </script>
            <?php
          }



?>