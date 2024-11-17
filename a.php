<?php
$randomValue = rand(1, 100);
session_start();
setcookie("value", $randomValue, time() + 3600, "/");
$_SESSION['value'] = $randomValue;
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Skript A</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
        }
        h2 {
            color: #555;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin: 10px 0;
        }
        a, button {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        a:hover, button:hover {
            background-color: #45a049;
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Vygenerovaná hodnota: <?php echo $randomValue; ?></h1>
    <h2>Vyber způsob předání hodnoty</h2>
    <ul>
        <li><a href="b.php?method=get&value=<?php echo $randomValue; ?>">GET</a></li>
        <form action="b.php" method="POST">
            <input type="hidden" name="method" value="post">
            <input type="hidden" name="value" value="<?php echo $randomValue; ?>">
            <button type="submit">POST</button>
        </form>
        <li><a href="b.php?method=cookie">COOKIE</a></li>
        <li><a href="b.php?method=session">SESSION</a></li>
    </ul>
</body>
</html>
