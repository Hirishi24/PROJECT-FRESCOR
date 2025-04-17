<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Table</title>
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "sridha@17";
  $dbname = "satya1";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "CREATE TABLE IF NOT EXISTS Employee (
      fullname VARCHAR(30) NOT NULL,
      phone VARCHAR(10),
      email VARCHAR(50),
      et VARCHAR(30) NOT NULL,
      date DATE
  )";

  if (mysqli_query($conn, $sql)) {
      echo "Table 'Employee' created successfully.";
  } else {
      echo "Error creating table: " . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>
</body>
</html>
