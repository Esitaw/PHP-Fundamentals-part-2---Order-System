<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: auto;
            text-align: center;
        }
        h2, h3 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Sam's Canteen! Here are the prices.</h2>
        <h3>All foods in the menu come with unlimited rice, soup, and free soft drinks!</h3>

        <table>
            <tr>
                <th>Order</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>Pares Overload</td>
                <td>100 PHP</td>
            </tr>
            <tr>
                <td>Fried Chicken</td>
                <td>120 PHP</td>
            </tr>
            <tr>
                <td>Beef Tapa</td>
                <td>130 PHP</td>
            </tr>
        </table>

        <form method="GET" action="getOrder.php">
            <label for="order">Select an order:</label>
            <select id="order" name="order">
                <option value="pares">Pares Overload</option>
                <option value="chicken">Fried Chicken</option>
                <option value="tapa">Beef Tapa</option>
            </select><br><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required><br><br>
            <label for="cash">Cash Paid:</label>
            <input type="number" id="cash" name="cash" min="0" required><br><br>
            <input type="submit" value="Submit Order">
        </form>
    </div>
</body>
</html>
