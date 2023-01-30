<?php
  // session_start();
  // if(isset($_SESSION['email']))
  {
  include('connection.php');
  $query = "select * from log";
  $query_run = mysqli_query($con,$query);
  //$sn = 0;
  echo "<center><h4><u>Euphoria Members</u></h4></center><br>";
  echo "<table class='table'>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>";
  while($row = mysqli_fetch_assoc($query_run))
  {
    //$sn = $sn + 1;
    //$id = $row['id'];
    echo "
      <tr>
        
        <td>$row[Name]</td>
        <td>$row[Email]</td>
        

        <td><a href='deleteUser.php'>Delete</a></td>
      </tr>
    ";
  }
  echo "</table>";
}
?>