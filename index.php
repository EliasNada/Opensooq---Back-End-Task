<?php 
    require 'helper.php';     // The helper which we will be using to create classes based on data from the HTML form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task</title>
    <style>
        form label{
            display: block;
            margin-top:10px
        }
        input[type=submit]{
            display: block;
            margin-top: 10px
        }
    </style>
</head>
<body>
<h1>Levenshtein Distance Task (Elias Nada)</h1>

<!-- form for sending data  -->

<form action="index.php" method="POST">
    <label for="first">First Text:</label>
    <input type="text" name="first" placeholder="First Text" required>
    <label for="second">Second Text:</label>
    <input type="text" name="second" placeholder="Second Text" required>
    <label for="mode">Mode:</label>
    <select name="type">
        <option value="Levenshtein">Levenshtein</option>
        <option value="Hamming">Hamming</option>
    </select>
    <input type="submit" value="Calculate">
</form>

<!-- END form for sending data  -->

<?php

// handling received data

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $first = $_POST["first"];
    $second = $_POST["second"];
    $type = $_POST['type'];

    // getting the results using the public static helper which creates a class based on the type of data received (Levenshtein or Hamming)

    echo $type.": " . Helper::instantiate($type, $first, $second) . " operations needed";
    
}
?>
</body>
</html>
