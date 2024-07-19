<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO students (first_name, last_name, date_of_birth, gender, course, contact) VALUES ('$first_name', '$last_name', '$date_of_birth', '$gender', '$course', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New student created successfully";
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
    <title>Students</title>
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
    
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: blue;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-right: 20px;
}

nav a {
  color: palevioletred;
  text-decoration: none;
}

nav a:hover {
  color: rosybrown;
}


main {
  padding: 20px;
}

h1 {
  color: #333;
}


footer {
  background-color: blanchedalmond;
  color: #fff;
  text-align: center;
  padding: 10px;
  position: absolute;
  bottom: 0;
  width: 100%;
}


@media (max-width: 768px) {
  nav ul {
    flex-direction: column;
  }

  nav li {
    margin-right: 0;
    margin-bottom: 10px;
  }
}
</style>
<body>
    <h1>Student Management</h1>
    <form action="student.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>
        <label for="course">Course:</label>
        <select id="course" name="course" required>
            <option value="BBIT">BBIT</option>
            <option value="BSCIT">BSCIT</option>
            <option value="BSE">BSE</option>
            <option value="BAF">BAF</option>
        </select><br><br>
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact"><br><br>
        <input type="submit" value="Create Student">
    </form>
</body>
</html>
