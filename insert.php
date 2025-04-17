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

// Check if all values are set
if (
    isset($_POST["name"]) && isset($_POST["phone"]) &&
    isset($_POST["email"]) && isset($_POST["type"]) &&
    isset($_POST["date"])
) {
    $fullname = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $et = $_POST["type"];
    $date = $_POST["date"];

    // Use prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO Employee (fullname, phone, email, et, date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullname, $phone, $email, $et, $date);

    if ($stmt->execute()) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Missing fields!";
}

mysqli_close($conn);
?>
