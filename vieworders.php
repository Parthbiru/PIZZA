<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (Your existing head content) ... -->
</head>
<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        background: url('home.jpeg') no-repeat center center fixed;
        background-size: cover;
    }

    /* Container Styles */
    .orders-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    /* Header Styles */
    h1 {
        text-align: center;
    }


    /* Price Styles */
    .order-price {
        font-weight: bold;
        color: #ff5733;
    }
</style>

<body>
    <div class="orders-container">
        <h1>Order History</h1>
        <table>
            <thead>
                <tr>
                    <th>Pizza</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) { ?>
                    <tr class="order-item">
                        <td class="order-details">
                            <p>
                                <?php echo $order['pizza_name']; ?>
                            </p>
                        </td>
                        <td class="order-price">Rs
                            <?php echo number_format($order['pizza_price'], 2); ?>
                        </td>
                        <td class="order-quantity">
                            <?php echo $order['quantity']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
