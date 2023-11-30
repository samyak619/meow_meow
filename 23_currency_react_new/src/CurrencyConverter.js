import React, { useState } from "react";

const CurrencyConverter = () => {
  const [amount, setAmount] = useState("");
  const [fromCurrency, setFromCurrency] = useState("USD");
  const [toCurrency, setToCurrency] = useState("EUR");
  const [convertedAmount, setConvertedAmount] = useState(null);

  const exchangeRates = {
    USD: {
      EUR: 0.85,
      GBP: 0.74,
<<<<<<< HEAD
      JPY: 114.2,
      INR: 73.5, // INR exchange rate (example value)
=======
      JPY: 114.20,
      INR: 73.50, // INR exchange rate (example value)
>>>>>>> 751b69ae93d78bcd2d0a2f4f5a79fc3f55e690ba
      // Add more exchange rates as needed
    },
    EUR: {
      USD: 1.18,
      GBP: 0.87,
      JPY: 131.75,
      INR: 87.23, // INR exchange rate (example value)
      // Add more exchange rates as needed
    },
    GBP: {
      USD: 1.35,
      EUR: 1.15,
      JPY: 151.34,
<<<<<<< HEAD
      INR: 99.5, // INR exchange rate (example value)
=======
      INR: 99.50, // INR exchange rate (example value)
>>>>>>> 751b69ae93d78bcd2d0a2f4f5a79fc3f55e690ba
      // Add more exchange rates as needed
    },
    JPY: {
      USD: 0.0088,
      EUR: 0.0076,
      GBP: 0.0066,
      INR: 0.65, // INR exchange rate (example value)
      // Add more exchange rates as needed
    },
    INR: {
      USD: 0.014, // Example value, you should replace it with the actual rate
      EUR: 0.011, // Example value, you should replace it with the actual rate
      GBP: 0.0101, // Example value, you should replace it with the actual rate
      JPY: 1.53, // Example value, you should replace it with the actual rate
      // Add more exchange rates as needed
    },
    // Add more currencies as needed
  };

  const handleConvert = () => {
    const rate = exchangeRates[fromCurrency][toCurrency];
    if (rate) {
      const result = amount * rate;
      setConvertedAmount(result.toFixed(2));
    } else {
<<<<<<< HEAD
      console.error(
        `Exchange rate for ${fromCurrency} to ${toCurrency} not available`
      );
=======
      console.error(`Exchange rate for ${fromCurrency} to ${toCurrency} not available`);
>>>>>>> 751b69ae93d78bcd2d0a2f4f5a79fc3f55e690ba
    }
  };

  return (
    <div>
      <h2>Currency Converter</h2>
      <div>
        <label>
          Amount:
          <input
            type="number"
            value={amount}
            onChange={(e) => setAmount(e.target.value)}
          />
        </label>
      </div>
      <div>
        <label>
          From Currency:
          <select
            value={fromCurrency}
            onChange={(e) => setFromCurrency(e.target.value)}
          >
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <option value="JPY">JPY</option>
            <option value="INR">INR</option>
            {/* Add more currency options as needed */}
          </select>
        </label>
      </div>
      <div>
        <label>
          To Currency:
          <select
            value={toCurrency}
            onChange={(e) => setToCurrency(e.target.value)}
          >
            <option value="EUR">EUR</option>
            <option value="USD">USD</option>
            <option value="GBP">GBP</option>
            <option value="JPY">JPY</option>
            <option value="INR">INR</option>
            {/* Add more currency options as needed */}
          </select>
        </label>
      </div>
      <button onClick={handleConvert}>Convert</button>
      {convertedAmount && (
        <p>
          Converted Amount: {convertedAmount} {toCurrency}
        </p>
      )}
    </div>
  );
};

export default CurrencyConverter;
