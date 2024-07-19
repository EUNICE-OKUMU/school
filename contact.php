<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            background-color: lightblue; /* Set background color to light blue */
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
    <h1>Contact Us</h1>
    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Send Message">
    </form>
</body>
</html>
