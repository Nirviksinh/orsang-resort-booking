<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .payment-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        .payment-card h2 {
            margin-top: 0;
            font-size: 1.5em;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group select {
            padding: 7px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="payment-card">
        <h2>Payment Information</h2>
        <form id="payment-form">
            <div class="form-group">
                <label for="payment-method">Payment Method</label>
                <select id="payment-method" name="payment-method" required>
                    <option value="credit-card">Credit Card</option>
                    <option value="debit-card">Debit Card</option>
                    <option value="google-pay">Google Pay</option>
                    <option value="cash-on-delivery">Cash on Booking</option>
                </select>
            </div>
            <div class="form-group" id="card-details">
                <label for="name">Name on Card</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group" id="card-details">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" required pattern="\d{16}" title="Card number must be 16 digits">
            </div>
            <div class="form-group" id="card-details">
                <label for="exp-date">Expiration Date</label>
                <input type="date" id="exp-date" name="exp-date" required>
            </div>
            <div class="form-group" id="card-details">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required pattern="\d{3}" title="CVV must be 3 digits">
            </div>
            <button type="submit">Submit Payment</button>
        </form>
    </div>

    <script>
        document.getElementById('payment-method').addEventListener('change', function() {
            var cardDetails = document.querySelectorAll('#card-details');
            if (this.value === 'cash-on-delivery') {
                cardDetails.forEach(function(element) {
                    element.style.display = 'none';
                });
            } else {
                cardDetails.forEach(function(element) {
                    element.style.display = 'block';
                });
            }
        });
        
        // Initial hide of card details if cash on delivery is selected
        document.getElementById('payment-method').dispatchEvent(new Event('change'));
    </script>
</body>
</html>
