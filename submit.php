<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .data-container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        p {
            color: #555;
            font-size: 16px;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #5cb85c;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Submitted Data</h1>

    <div class="data-container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize input data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $age = htmlspecialchars($_POST['age']);
        $course = htmlspecialchars($_POST['course']);

        // Display the submitted data
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Course:</strong> $course</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>
</html>