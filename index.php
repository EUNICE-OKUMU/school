<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: yellowgreen;
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
  color: goldenrod;
}

main {
  padding: 20px;
}

h1 {
  color: black; /* Change the color of h1 text to black */
}

footer {
  background-color: peachpuff;
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
    <header>
        <h1>Welcome to the School Management System</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="student.php">Students</a></li>
            <li><a href="staff.php">Staff</a></li>
            <li><a href="course.php">Courses</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <main>

    </main>
    <footer>
        <p>&copy; 2024 School Management System</p>
    </footer>
</body>
</html>
