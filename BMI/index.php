<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>BMI Calculator</h1>
        <form action="function.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter your name" />

            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" required placeholder="Enter your height in cm" min="50"
                max="300" />

            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required placeholder="Enter your weight in kg" min="20"
                max="300" />

            <button type="submit">Calculate BMI</button>
        </form>
    </div>
</body>

</html>