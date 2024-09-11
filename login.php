<!DOCTYPE html>
<html>

<head>
    <title>Customer Login</title>
    <style>
        body {
            font-family: 'Cedarville Cursive', cursive;
            background-color: #f2f2f2;
            text-align: center;
            background: url('home.jpg') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(2px);
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFBF00;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .input-group {
            margin-top: 15px;
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <h2>Customer Login</h2>
    <form method="post" action="">
        <div class="input-group">
            <label>Username:</label>
            <input type="text" name="username" required><br><br>
        </div>
        <div class="input-group">
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
        </div>
        <div class="input-group">
            <input type="submit" value="Login">
        </div>
    </form>
</body>

</html>
<?php
$host = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = ""; // Replace with your database name

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
