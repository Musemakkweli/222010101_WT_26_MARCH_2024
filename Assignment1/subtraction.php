<!DOCTYPE html>

<!-- BELYSE MUSEMAKWELI  222010101  BIT GROUP 1-->
<!-- 26 March 2024-->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtraction Result</title>
</head>
<body style="background-color: rgb(237, 119, 217);">
<center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        

        $fullName = $firstName . " " . $lastName;

        $result = $num1 - $num2;
        echo "<h1>Hello $fullName</h1>";
        echo "<p>The result of subtracting $num2 from $num1 is: $result</p>";
    }
    ?>
    </center>
</body>
</html>
