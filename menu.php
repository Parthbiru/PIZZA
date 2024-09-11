<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Menu</title>
    <style>
        /* Add CSS styles for formatting */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            background: url('home.jpg') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(2px);
        }

        .menu-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFBF00;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pizza-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .pizza-details {
            flex: 1;
        }

        .pizza-price {
            font-weight: bold;
            color: #ff5733;
        }

        /* Add a new style for the "View Orders" link */
        a.view-orders {
            text-decoration: none;
            background-color: grey;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
            transition: background-color 0.3s;
        }

        /* Change the link color on hover */
        a.view-orders:hover {
            background-color: grey;
        }

        .menu-item {
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .menu-item img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="menu-container">
        <h1>Pizza Menu</h1>

        <!-- Pizza Item 1 -->
        <form method="post" action="menu.php">
            <article class="menu-item">
                <div class="pizza-item">
                    <div class="pizza-details">
                        <img src="Margherita.jpg" alt="Margherita Pizza">
                        <h2>Margherita Pizza</h2>
                        <p>Tomato sauce, mozzarella cheese, basil</p>
                    </div>
                    <div class="pizza-price">299 rs</div>
                    <div class="pizza-quantity">
                        <input type="number" name="quantity" value="0" min="0">
                    </div>
                    <div class="pizza-action">
                        <input type="hidden" name="pizza_name" value="Margherita Pizza">
                        <input type="hidden" name="pizza_price" value="299">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </div>
                </div>
            </article>
        </form>

        <!-- Pizza Item 2 -->
        <form method="post" action="menu.php">
            <article class="menu-item">
                <div class="pizza-item">
                    <div class="pizza-details">
                        <img src="pepperoni.jpg" alt="Pepperoni Pizza">
                        <h2>Pepperoni Pizza</h2>
                        <p>Tomato sauce, pepperoni, mozzarella cheese</p>
                    </div>
                    <div class="pizza-price">399 rs</div>
                    <div class="pizza-quantity">
                        <input type="number" name="quantity" value="0" min="0">
                    </div>
                    <div class="pizza-action">
                        <input type="hidden" name="pizza_name" value="Pepperoni Pizza">
                        <input type="hidden" name="pizza_price" value="399">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </div>
                </div>
            </article>
        </form>

        <!-- Add more pizza items here -->

    </div><br><br>
    <!-- Add a link to view orders -->
    <center>
        <a href="vieworders.php" class="view-orders">View Orders</a>
    </center>
</body>

</html>
