<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
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
  background-color: #99ffcc; /* Set the background color to a light blue-green */
}

header {
  background-color: brown;
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
  color: coral;
  text-decoration: none;
}

nav a:hover {
  color: white;
}

main {
  padding: 20px;
}

h1 {
  color: #333;
}

footer {
  background-color: lightgreen;
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
    <h1>Courses Offered</h1>
    <ul>
        <li>BBIT - Bachelor of Business Information Technology</li>
        <li>BSCIT - Bachelor of Science in Information Technology</li>
        <li>BSE - Bachelor of Software Engineering</li>
        <li>BAF - Bachelor of Accounting and Finance</li>
    </ul>
</body>
</html>
