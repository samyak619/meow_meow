<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Transformation</title>
</head>

<body>

    <?php
    // Function to transform the string
    function transformString($inputString, $transformationType)
    {
        switch ($transformationType) {
            case 'uppercase':
                return strtoupper($inputString);
                break;
            case 'lowercase':
                return strtolower($inputString);
                break;
            case 'first-uppercase':
                return ucfirst(strtolower($inputString));
                break;
            default:
                return $inputString;
        }
    }

    // Process user input
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $transformationType = $_POST["transformationType"];

        // Transform the string
        $transformedString = transformString($inputString, $transformationType);
    } else {
        // Default values
        $inputString = "hello world";
        $transformationType = "uppercase";
        $transformedString = transformString($inputString, $transformationType);
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" id="inputString" value="<?php echo $inputString; ?>" required>

        <br>

        <label for="transformationType">Select transformation type:</label>
        <select name="transformationType" id="transformationType">
            <option value="uppercase" <?php echo ($transformationType == 'uppercase') ? 'selected' : ''; ?>>Uppercase</option>
            <option value="lowercase" <?php echo ($transformationType == 'lowercase') ? 'selected' : ''; ?>>Lowercase</option>
            <option value="first-uppercase" <?php echo ($transformationType == 'first-uppercase') ? 'selected' : ''; ?>>First Uppercase</option>
        </select>

        <br>

        <input type="submit" value="Transform">
    </form>

    <h2>Original String:</h2>
    <p><?php echo $inputString; ?></p>

    <h2>Transformed String:</h2>
    <p><?php echo $transformedString; ?></p>

</body>

</html>

