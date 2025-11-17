<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Menu</title>
    <style>
        body { font-family: Georgia, serif; padding:20px; }
        h1 { font-size:40px; }
        .menu-table { border-collapse: collapse; border: 3px solid #000; width:320px; }
        .menu-table th, .menu-table td { border: 1px solid #000; padding:8px 12px; }
        label { display:block; margin-top:18px; font-size:18px; }
        input[type="number"], select { padding:6px; font-size:16px; width:220px; margin-top:6px; }
        button { margin-top:14px; padding:6px 12px; font-size:16px; }
    </style>
</head>
<body>
    <h1>Menu</h1>

    <table class="menu-table">
        <tr>
            <th style="width:200px;">Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <form method="post" action="page2.php" style="margin-top:22px;">
        <label>
            Select an order
            <select name="item">
                <option value="Burger">Burger</option>
                <option value="Fries">Fries</option>
                <option value="Steak">Steak</option>
            </select>
        </label>

        <label>
            Quantity
            <input type="number" name="quantity" value="1" min="1" />
        </label>

        <label>
            Cash
            <input type="number" name="cash" value="0" min="0" step="0.01" />
        </label>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
