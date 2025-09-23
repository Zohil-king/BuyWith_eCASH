<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyWith eCash</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">BuyWith eCash</div>
        <img src="ecash.jpg" height = "100px" alt="eCash_logo">
    </header>

    <!-- Menu Bar -->
    <nav class="menu-bar">
        <a href="success.php">Home</a>
        <a href="products.html">Products</a>
        <a href="#">Cart</a>
        <a href="logout.php">Logout</a>
    </nav>

    <!-- Main Content -->
    <main>
        <section class="about-xec">
            <h3 >Welcome to BuyWith eCash<br>
            <?php echo $_SESSION['username']; ?>!</h3><br><br>        
            <h2>About Xec</h2>
            <p><strong>Xec</strong> is a fast, secure, and decentralized digital currency that allows you to make online payments instantly.</p>
            <ul>
                <li><strong>Pay directly online:</strong> No need for a credit card or bank account.</li>
                <li><strong>Low transaction fees:</strong> Save money compared to traditional payment methods.</li>
                <li><strong>Secure wallet:</strong> Store and manage your Xec safely.</li>
                <li><strong>Shop globally:</strong> Xec is accepted worldwide.</li>
            </ul>
            <p>Now on our website, you can buy products using <strong>Xec</strong>, making your shopping experience faster, easier, and more convenient!</p>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 BuyWith eCash</p>
    </footer>
</body>
</html>
