<?php
session_start();
require_once 'phpscripts/connect.php';
?>
<div class="header">
    <a href="index.php"></a>
        <img src="images/logo.svg" alt="Chick-fil-A Logo">
    </a>

    <div class="nav-bar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="order.php">Order Now</a></li>
        </ul>
    </div>

    <div class="buttons">
        <!-- Cart Button -->
        <?php
        try {
            $session_id = session_id();
            $query = "SELECT SUM(quantity) AS total_items FROM cart WHERE session_id = :session_id";
            $stmt = $conn->prepare($query);
            $stmt->execute(['session_id' => $session_id]);
            $total_items = $stmt->fetch(PDO::FETCH_ASSOC)['total_items'] ?? 0;
        } catch (Exception $e) {
            $total_items = 0; // Default to 0 if there's an error
        }
        ?>
        <div class="cart">
            <a href="cart.php">
                <button>Cart (<?php echo $total_items; ?>)</button>
            </a>
        </div>

        <div class="find-cfa">
            <a href="find-cfa.php">
                <button>Find a Chick-fil-A</button>
            </a>
        </div>

        <!-- Sign-In/Sign-Out Button -->
        <?php if (isset($_SESSION['username'])): ?>
            <div class="sign-in">
                <a href="phpscripts/logout.php">
                    <button>Sign Out</button>
                </a>
            </div>
        <?php else: ?>
            <div class="sign-in">
                <a href="signin.php">
                    <button>Sign In/Join</button>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>
