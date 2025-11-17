<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: page1.php');
    exit;
}

$prices = [
    'Burger' => 50,
    'Fries'  => 75,
    'Steak'  => 150,
];

$item = $_POST['item'] ?? 'Burger';
$quantity = max(1, (int)($_POST['quantity'] ?? 1));
$cash = (float)($_POST['cash'] ?? 0);
$price_each = $prices[$item] ?? 0;
$total = $price_each * $quantity;
$change = $cash - $total;
$date = date('m/d/Y h:i:s a');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Receipt</title>
    <style>
        body { font-family: Georgia, serif; padding:20px; }
        .container { border:1px dotted #000; padding:20px; }
        h1 { text-align:center; font-size:64px; margin:0 0 20px; }
        .value { font-size:48px; margin:10px 0; }
        .small-italic { font-style:italic; font-size:28px; margin-top:20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>RECEIPT</h1>

        <div class="value">Total Price: <?php echo number_format($total, 0); ?></div>
        <div class="value">You Paid: <?php echo number_format($cash, 0); ?></div>
        <div class="value">CHANGE: <?php echo ($change >= 0) ? number_format($change, 0) : 'Insufficient cash'; ?></div>

        <div class="small-italic"><?php echo $date; ?></div>
    </div>
</body>
</html>
