<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled HTML Form with PHP GET Method</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin-bottom: 20px;
        }
        label {
            color: #555;
        }
        input[type="text"], input[type="email"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            background-color: #e7f3fe;
            border: 1px solid #b3d7ff;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .result p {
            margin: 5px 0;
            color: #333;
        }
        .result span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Student Information Form</h2>
    
    <!-- Form HTML -->
    <form action="" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="father_name">Father's Name:</label>
        <input type="text" id="father_name" name="father_name" required>
        
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        
        <label for="university">University:</label>
        <input type="text" id="university" name="university" required>
        
        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required>
        
        <input type="submit" value="Submit">
    </form>
    
    <!-- PHP Code to Process Form Data -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
        $name = $_GET['name'];
        $father_name = $_GET['father_name'];
        $email = $_GET['email'];
        $dob = $_GET['dob'];
        $university = $_GET['university'];
        $department = $_GET['department'];

        echo '<div class="result">';
        echo "<h2>Submitted Information</h2>";
        echo "<p><span>Name:</span> " . htmlspecialchars($name) . "</p>";
        echo "<p><span>Father's Name:</span> " . htmlspecialchars($father_name) . "</p>";
        echo "<p><span>Email Address:</span> " . htmlspecialchars($email) . "</p>";
        echo "<p><span>Date of Birth:</span> " . htmlspecialchars($dob) . "</p>";
        echo "<p><span>University:</span> " . htmlspecialchars($university) . "</p>";
        echo "<p><span>Department:</span> " . htmlspecialchars($department) . "</p>";
        echo '</div>';
    }
    ?>
</body>
</html>