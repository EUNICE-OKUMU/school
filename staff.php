<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $role = $_POST['role'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO staff (first_name, last_name, role, contact) VALUES ('$first_name', '$last_name', '$role', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New staff created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link rel="stylesheet" href="style.css">
    <nav>
        <a href="index.php">Home</a>
        <a href="student.php">Students</a>
        <a href="staff.php">Staff</a>
        <a href="course.php">Courses</a>
        <a href="contact.php">Contact Us</a>
        
    </nav>
</head>
<style>
    
body, html {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: lightgreen; 
}


.navbar {
    background-color: #333;
    overflow: hidden;
}

.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}


.content {
    padding: 20px;
    background-color: white; 
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
}

@media (max-width: 768px) {
    .navbar a {
        float: none;
        display: block;
        text-align: left;
    }
}

</style>

<body>
    <h1>Staff Management</h1>
    <form action="staff.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        <label for="role">Role:</label>
        <input type="text" id="role" name="role" required><br><br>
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact"><br><br>
        <input type="submit" value="Create Staff">
    </form>
</body>
</html>
