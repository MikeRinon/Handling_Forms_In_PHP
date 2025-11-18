<?php
$a = isset($_POST['a']) ? $_POST['a'] : 3;
$b = isset($_POST['b']) ? $_POST['b'] : 2;
$c = isset($_POST['c']) ? $_POST['c'] : 1;

$a = is_numeric($a) ? (float)$a : 0.0;
$b = is_numeric($b) ? (float)$b : 0.0;
$c = is_numeric($c) ? (float)$c : 0.0;

$discriminant = $b * $b - 4 * $a * $c;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Discriminant result</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="result"><?php echo htmlspecialchars((string)$discriminant, ENT_QUOTES, 'UTF-8'); ?></div>

  <main class="container">
    <p><a href="page1.php">&larr; Back</a></p>
  </main>

</body>
</html>

