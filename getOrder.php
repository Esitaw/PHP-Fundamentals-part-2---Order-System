<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $order = $_GET["order"];
    $quantity = $_GET["quantity"];
    $cash = $_GET["cash"];

    // Menu prices
    $prices = [
        "pares" => 100,
        "chicken" => 120,
        "tapa" => 130
    ];

    // Calculate total price
    $total_price = $prices[$order] * $quantity;

    // Calculate change
    $change = $cash - $total_price;

    // Get current date and time
    date_default_timezone_set('Asia/Manila'); // Set to your desired timezone
    $current_time = date("m/d/Y h:i:s a");

    echo "<style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            .receipt { border: 2px solid #333; padding: 20px; width: 300px; margin: auto; text-align: center; }
            h2 { color: #333; }
            p { margin: 5px 0; }
            .total, .change { font-weight: bold; margin-top: 15px; }
            .error { color: red; font-weight: bold; }
          </style>";

    echo "<div class='receipt'>";
    echo "<h2>Order Receipt</h2>";
    echo "<p>" . $current_time . "</p>";
    echo "<p><strong>Order:</strong> " . ucfirst($order) . "</p>";
    echo "<p><strong>Quantity:</strong> " . $quantity . "</p>";
    echo "<p class='total'><strong>Total Price:</strong> " . $total_price . " PHP</p>";
    echo "<p><strong>Cash Paid:</strong> " . $cash . " PHP</p>";

    if ($change < 0) {
       
        echo "<p class='error'>Sorry, balance not enough.</p>";
    } else {
       
        echo "<p class='change'><strong>Change:</strong> " . $change . " PHP</p>";
    }

    echo "</div>";
} else {
    echo "Error: Form not submitted.";
}
?>
