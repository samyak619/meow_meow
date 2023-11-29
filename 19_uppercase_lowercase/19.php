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

    // Example usage
    $inputString = "hello world";
    $transformationType = "uppercase"; // Options: "uppercase", "lowercase", "first-uppercase"

    // Transform the string
    $transformedString = transformString($inputString, $transformationType);
    ?>

    <h2>Original String:</h2>
    <p><?php echo $inputString; ?></p>

    <h2>Transformed String:</h2>
    <p><?php echo $transformedString; ?></p>

</body>

</html>
