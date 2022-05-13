<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td{
        border: 1px solid black;
        text-align: center;
        background-color: lightblue;
        }
    </style>
</head>

<body>
    <h1>Your BMI:</h1>
    <?php
    $BMI = $_GET['BMI'];
    print($BMI."<br>");
    if ($BMI < 18.5) print("Underweight");
    if ($BMI >= 18.5 && $BMI < 24) print("Normal weight");
    if ($BMI >= 25 && $BMI < 30) print("Overweight");
    if ($BMI >= 30) print("Obesity");
    ?>
   <br><br>
    <table>
        <tr>
            <td>BMI</td>
            <td>BMI < 18.5</td>
            <td>BMI = 18.5 ~ 24.9</td>
            <td>BMI = 25 ~ 29.9</td>
            <td>BMI >= 30</td>
        </tr>
        <tr>
            <td>Standard</td>
            <td>Underweight</td>
            <td>Normal weight</td>
            <td>Overweight</td>
            <td>Obesity</td>
        </tr>
    </table>
</body>

</html>