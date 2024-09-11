
<!DOCTYPE html>
<html>

<head>
    <title>Customer Registration</title>
    <style>
        body {
            height: 100%;
            width: 100%;
            font-family: 'Cedarville Cursive', cursive;
            background-color: #f2f2f2;
            background: url('home.jpg') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(2px);
        }

        h2 {
            text-align: center;
            color: whitesmoke;
        }

        form {
            max-width: 400px;
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
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
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
    <h2>Customer Registration</h2>
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
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
        </div>
        <input type="submit" value="Register">
    </form>
</body>

</html>
