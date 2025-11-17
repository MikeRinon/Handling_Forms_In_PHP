<?php
$a = isset($_GET['a']) ? $_GET['a'] : 3;
$b = isset($_GET['b']) ? $_GET['b'] : 2;
$c = isset($_GET['c']) ? $_GET['c'] : 1;

$a = is_numeric($a) ? (string)$a : '0';
$b = is_numeric($b) ? (string)$b : '0';
$c = is_numeric($c) ? (string)$c : '0';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Discriminant of a quadratic equation</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <main class="container">
    <h1>Discriminant of a quadratic equation</h1>

    <form method="post" action="page2.php" class="form">
      <div class="row">
        <label for="a">A</label>
        <input id="a" name="a" type="text" value="<?php echo htmlspecialchars($a, ENT_QUOTES, 'UTF-8'); ?>">
      </div>

      <div class="row">
        <label for="b">B</label>
        <input id="b" name="b" type="text" value="<?php echo htmlspecialchars($b, ENT_QUOTES, 'UTF-8'); ?>">
      </div>

      <div class="row">
        <label for="c">C</label>
        <input id="c" name="c" type="text" value="<?php echo htmlspecialchars($c, ENT_QUOTES, 'UTF-8'); ?>">
      </div>

      <div class="actions">
        <button type="submit">Submit</button>
      </div>
    </form>
  </main>

</body>
</html>
