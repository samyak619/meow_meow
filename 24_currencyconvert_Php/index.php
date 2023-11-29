<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Currency Converter</title>
</head>

<body>
    <div class="converter-container">
        <h2>Currency Converter</h2>
        <form action="" method="post">
            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" required>

            <label for="from_currency">From Currency:</label>
            <select id="from_currency" name="from_currency" required>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <!-- Add more currency options as needed -->
            </select>

            <label for="to_currency">To Currency:</label>
            <select id="to_currency" name="to_currency" required>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <!-- Add more currency options as needed -->
            </select>

            <button type="submit">Convert</button>
        </form>

        <div class="result" id="result">
            <?php
            function convertCurrency($amount, $from_currency, $to_currency) {
                $conversion_rates = [
                    "USD" => ["USD" => 1, "EUR" => 0.85],
                    "EUR" => ["USD" => 1.18, "EUR" => 1],
                ];

                if (isset($conversion_rates[$from_currency]) && isset($conversion_rates[$to_currency])) {
                    $conversion_rate = $conversion_rates[$from_currency][$to_currency];
                    $result = $amount * $conversion_rate;
                    return "{$amount} {$from_currency} is equal to {$result} {$to_currency}";
                } else {
                    return "Invalid currency selection";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $amount = isset($_POST["amount"]) ? floatval($_POST["amount"]) : 0;
                $from_currency = isset($_POST["from_currency"]) ? $_POST["from_currency"] : "";
                $to_currency = isset($_POST["to_currency"]) ? $_POST["to_currency"] : "";

                if ($amount > 0 && $from_currency !== "" && $to_currency !== "") {
                    $result = convertCurrency($amount, $from_currency, $to_currency);
                    echo "<p>{$result}</p>";
                } else {
                    echo "<p>Invalid input. Please fill in all fields with valid values.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
