<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="donation.css">
</head>
<body>
    <div class="app-container">
        <div class="top-box">
        <p><span class="left-icon"><a href="index.html">&#x2190;</a></span>checkout<span class="right-icon">&#xb7;&#xb7;&#xb7;</span></p>
        </div>

        <div class="middle-box">
            <h1>1599<span>$</span></h1>
            <p>Pay To Logans Home</p>
        </div>

        <div class="bottom-box">
            <button type="button" class="payment-option-btn">Pay with PayPal</button>
            <button type="button" class="payment-option-btn">Pay using Net Banking</button>
        
    
            <div class="card-details">
                <p>Pay using credit or debit card</p>
                <div class="card-num-field-group">
                    <label>Card Number</label><br>
                    <input type="number" class="card-num-field" placeholder="xxxx-xxxx-xxxx-xxxx">
                </div>

                <div class="date-field-group">
                    <label>Expiry Date</label><br>
                    <input type="text" class="date-field" placeholder="mm">
                    <input type="number" class="date-field" placeholder="yyyy">
                </div>

                <div class="cvc-field-group">
                    <label>CVC</label><br>
                    <input type="password" class="cvc-field" placeholder="xxx">
                </div>

                <div class="name-field-group">
                    <label>Card Holder Name</label><br>
                    <input type="text" class="name-field" placeholder="Full Name">
                </div>

                <button type="button" class="pay-btn">Pay Now</button>
            </div>            
        </div>    
    </div>

</body>
</html>