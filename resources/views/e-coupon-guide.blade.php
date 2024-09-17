<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Voucher Guide</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">GONcEasy Guide</div>
        <div class="navbar-links" id="navbarLinks">
            <a href="e-voucher">E-Voucher Guide</a>
            <a href="e-coupon">E-Coupon Guide</a>
            <a href="promotion">Promotion</a>
        </div>
        <div class="navbar-toggle" id="navbarToggle">
            &#9776; <!-- Hamburger Icon -->
        </div>
    </div>

    <div class="container">
        <h1>E-Coupon Platform Guide</h1>

        <div class="dropdown">
            <button class="dropdown-btn" onclick="toggleContent('lazada', this)">
                Guide 1 <span class="arrow">&#x25B6;</span>
            </button>
            <div id="lazada" class="dropdown-content">
                <h2>Lazada E-Voucher Instructions</h2>
                <div class="steps">
                    <div class="step">
                        <img src="step1.gif" alt="Step 1">
                        <p>Step 1: Go to your cart and select the voucher.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-btn" onclick="toggleContent('shopee', this)">
                Guide 2 <span class="arrow">&#x25B6;</span>
            </button>
            <div id="shopee" class="dropdown-content">
                <h2>Shopee E-Voucher Instructions</h2>
                <div class="steps">
                    <div class="step">
                        <img src="step1.gif" alt="Step 1">
                        <p>Step 1: Select the voucher at checkout.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-btn" onclick="toggleContent('physical', this)">
                Guide 3 <span class="arrow">&#x25B6;</span>
            </button>
            <div id="physical" class="dropdown-content">
                <h2>Physical E-Voucher Instructions</h2>
                <div class="steps">
                    <div class="step">
                        <img src="step1.gif" alt="Step 1">
                        <p>Step 1: Present the voucher code at the store.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-btn" onclick="toggleContent('dgd', this)">
                Guide 4 <span class="arrow">&#x25B6;</span>
            </button>
            <div id="dgd" class="dropdown-content">
                <h2>DGD E-Voucher Instructions</h2>
                <div class="steps">
                    <div class="step">
                        <img src="step1.gif" alt="Step 1">
                        <p>Step 1: Enter the voucher code during checkout.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="script.js"></script>
</body>
</html>
