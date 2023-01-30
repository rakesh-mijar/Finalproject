<?php
session_start();
if (isset($_SESSION['Email']))
  include('connection.php');
$query = "select * from litrary3";
$query_run = mysqli_query($con, $query);
$sn = 0;
echo "<center><h4><u>Litrary Members</u></h4></center><br>";
echo "<table class='table'>
    <tr>
      
      <th>FirstName</th>
      <th>LastName</th>
      <th>USN</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Gender</th>
      <th>Branch</th>
      <th>Semester</th>
      
      <th>Action</th>
    </tr>";
while ($row = mysqli_fetch_assoc($query_run)) {
  $sn = $sn + 1;
  $id = $row['id'];
  echo "
      <tr>
        <td>$row[FirstName]</td>
         <td>$row[LastName]</td>
         <td>$row[USN]</td>
         <td>$row[Email]</td>
         <td>$row[Mobile]</td>
         <td>$row[Gender]</td>
         <td>$row[Branch]</td>
         <td>$row[Semester]</td>
        <td><a href='delit.php?id=$id'>Delete</a></td>
      </tr>
    ";
}
echo "</table>";
//header('location:login.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="overflow-x: hidden;  background-color:#ffca;">
  <center><a type="button" class="btn btn-outline-dark btn-lg" href="control.php">Go Back</a></center>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>