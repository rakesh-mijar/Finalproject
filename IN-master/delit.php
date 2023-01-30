<?php
  include('connection.php');
  $query = "delete from litrary3 where id = $_GET[id]";
  //$query="DELETE FROM `razzele` WHERE `razzele`.`id` = $_GET[id]";
  $query_run = mysqli_query($con,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('User Deleted successfully...');
      window.location.href = 'viewlitrary.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'viewlitrary.php';
     
    </script>";
  }
?>