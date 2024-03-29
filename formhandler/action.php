<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
<div class="container mt-5">
<h2>PHP Calculator</h2>
<form method="post">
    <input type="text" name="num1" placeholder="Enter first number">
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="text" name="num2" placeholder="Enter second number">
    <button type="submit" name="calculate">Calculate</button>
</form>

<?php
if(isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

    switch($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
        default:
            $result = "Invalid operator";
    }

    echo "<h3>Result: $result</h3>";
}
?>
</div>

    
</body>
</html>


