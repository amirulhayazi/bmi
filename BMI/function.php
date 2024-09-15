<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $height = htmlspecialchars($_POST['height']);
    $weight = htmlspecialchars($_POST['weight']);

    // BMI Calculation
    $heightInMeters = $height / 100;
    $bmi = $weight / ($heightInMeters * $heightInMeters);
    $bmi = round($bmi, 2);

    // BMI Category
    if ($bmi < 18.5) {
        $category = "Underweight";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        $category = "Normal weight";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        $category = "Overweight";
    } else {
        $category = "Obesity";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="result-container">
        <h1>Hi, <?php echo $name; ?></h1>
        <p>Your BMI is: <strong><?php echo $bmi; ?></strong></p>
        <p>You are classified as: <strong><?php echo $category; ?></strong></p>
        <a href="index.php" class="back-btn">Calculate Again</a>
    </div>
</body>

</html>