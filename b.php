<?php
session_start();

$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : null;
$value = null;

switch ($method) {
    case 'get':
        $value = isset($_GET['value']) ? $_GET['value'] : "Hodnota nebyla předána přes GET.";
        break;
    case 'post':
        $value = isset($_POST['value']) ? $_POST['value'] : "Hodnota nebyla předána přes POST.";
        break;
    case 'cookie':
        $value = isset($_COOKIE['value']) ? $_COOKIE['value'] : "Cookie není nastaveno.";
        break;
    case 'session':
        $value = isset($_SESSION['value']) ? $_SESSION['value'] : "Hodnota v session neexistuje.";
        break;
    default:
        $value = "Nebyla vybrána žádná metoda.";
        break;
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Skript B</title>
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
        p a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        p a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Zvolená metoda: <?php echo htmlspecialchars($method ?? "neznámá"); ?></h1>
    <h2>Hodnota: <?php echo htmlspecialchars($value); ?></h2>
    <p><a href="a.php">Zpět na Skript A</a></p>
</body>
</html>
