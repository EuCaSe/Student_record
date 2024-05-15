<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIMS</title>
    <style>
        body {
            background-color: #F7DCB9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #2C3E50;
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            color: #34495E;
            font-size: 18px;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        li a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498DB;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        li a:hover {
            background-color: #2980B9;
        }

        .center {
            display: block;
            margin: 0 auto;
            border: 1px solid #34495E;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Academic Information Management System</h1>
        <p>Please select an option:</p>
        <ul>
            <li><a href="input_form.php">Input New Record</a></li>
            <li><a href="delete.php">Delete Record</a></li>
        </ul>
    </div>
</body>

</html>
