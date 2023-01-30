<?php
  include('connection.php');
  $query = "delete from razzele3 where id = $_GET[id]";
  //$query="DELETE FROM `razzele` WHERE `razzele`.`id` = $_GET[id]";
  $query_run = mysqli_query($con,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('User Deleted successfully...');
      window.location.href = 'viewrazz.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'viewrazz.php';
     
    </script>";
  }
?>