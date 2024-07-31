<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samangri Nepal</title>
    <link rel="stylesheet" href="./CSS/UserHomePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="./project.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="Samangri Nepal.png" alt="Samangri Nepal Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>Search</button>
            <div class="auth-links">
                <a href="Login.html">Login</a>
                <a href="Signup.html">Sign Up</a>
                <div class="cart">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="top-section">
            <div class="highlights">
                <div class="highlight-item">
                   <a href="#"><img src="./Realme-Narzo-70-Pro-5G-Price-in-Nepal.jpg" alt="Realme Narzo 70 Pro"></a>
                   <a href="#"><p>Realme Narzo 70 Pro launching soon in Nepal with Sony IMX890 camera</p> </a> 
                </div>
                <div class="highlight-item">
                    <img src="./Moto-Edge-50-Fusion-Review.jpg" alt="Moto Edge 50 Fusion">
                    <p>Moto Edge 50 Fusion review: Elegant, but what else?</p>
                </div>
                <div class="highlight-item">
                    <img src="./iPad-Pro-M4-Review.jpg"   alt="iPad Pro M4">
                    <p>iPad Pro M4 review: A super powerful beast tamed by iPadOS limitations</p>
                </div>
            </div>
        </section>

        <section class="categories">
            <h2>Categories:</h2>
            <div class="category-icons">
                <div class="category">
                    <img src="./mobile.png" alt="Mobiles">
                    <p>MOBILES</p>
                </div>
                <div class="category">
                    <img src="./laptop.png" alt="Laptops">
                    <p>LAPTOPS</p>
                </div>
                <div class="category">
                    <img src="./watch.png" alt="Watch">
                    <p>WATCH</p>
                </div>
                <div class="category">
                    <img src="./pc.png" alt="PC Build">
                    <p>PC BUILD</p>
                </div>
                <div class="category">
                    <img src="./earbuds.png" alt="Earbuds">
                    <p>EARBUDS</p>
                </div>
            </div>
        </section>

        <section class="products">
            <h2>Mobiles</h2>
            <?php
            $conn = new mysqli("localhost", "username", "password", "db_cart");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT name, price, image FROM products WHERE category = 'Mobiles'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<p>' . $row["name"] . '<br>Rs: ' . $row["price"] . '</p>';
                    echo '<button class="add-to-cart-btn">Add to Cart</button>';
                    echo '<button class="add-to-cart-btn">BUY</button>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </section>

        <section class="products">
            <h2>Laptops</h2>
            <?php
            $conn = new mysqli("localhost", "username", "password", "db_cart");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT name, price, image FROM products WHERE category = 'Laptops'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<p>' . $row["name"] . '<br>Rs: ' . $row["price"] . '</p>';
                    echo '<button class="add-to-cart-btn">Add to Cart</button>';
                    echo '<button class="add-to-cart-btn">BUY</button>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </section>

        <section class="products">
            <h2>Watches</h2>
            <?php
            $conn = new mysqli("localhost", "username", "password", "db_cart");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT name, price, image FROM products WHERE category = 'Watches'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<p>' . $row["name"] . '<br>Rs: ' . $row["price"] . '</p>';
                    echo '<button class="add-to-cart-btn">Add to Cart</button>';
                    echo '<button class="add-to-cart-btn">BUY</button>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </section>

        <section class="products">
            <h2>Earbuds</h2>
            <?php
            $conn = new mysqli("localhost", "username", "password", "db_cart");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT name, price, image FROM products WHERE category = 'Earbuds'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<p>' . $row["name"] . '<br>Rs: ' . $row["price"] . '</p>';
                    echo '<button class="add-to-cart-btn">Add to Cart</button>';
                    echo '<button class="add-to-cart-btn">BUY</button>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </section>

        <section class="products">
            <h2>PC Build</h2>
            <?php
            $conn = new mysqli("localhost", "username", "password", "db_cart");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT name, price, image FROM products WHERE category = 'PC Build'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<p>' . $row["name"] . '<br>Rs: ' . $row["price"] . '</p>';
                    echo '<button class="add-to-cart-btn">Add to Cart</button>';
                    echo '<button class="add-to-cart-btn">BUY</button>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </section>
    </main>

    <footer>
        <div class="footer-links">
            <a class="btn" href="AboutUS.html">About Samangri Nepal</a>
            <a class="btn" href="PrivacyPolicy.html">Privacy Policy</a>
            <a class="btn" href="ContactUS.html">Contact</a>
        </div>
    </footer>
</body>
</html>
